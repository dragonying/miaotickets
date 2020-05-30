<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-29
 * Time: 16:14
 */

/**
 * 自动生成脚本
 */
file_exists(__DIR__ . '/../../autoload.php') && require_once __DIR__ . '/../../autoload.php';
file_exists(__DIR__ . '/vendor/autoload.php') && require_once __DIR__ . '/vendor/autoload.php';

use QL\QueryList;


$logFile = __DIR__ . '/init.log';

if (file_exists($logFile)){
    return;
}else{
    touch($logFile);
}

if (!function_exists('initLog')){
    function initLog($str)
    {
        $logFile = __DIR__ . '/init.log';
        file_put_contents($logFile, date('Y-m-d H:i:s u') . ' --- ' . $str . "\n\r", FILE_APPEND);
    }
}


//生成基础interface
initLog('开始生成基础interface:BaseLink');

$domain = 'http://api.web.21ds.cn';
$apiUrl = 'https://open.21ds.cn/index/index/openapi/id/1.shtml';
/** @var String $apiHtml 获取html */
$apiHtml = QueryList::getInstance()->get($apiUrl)->rules([
    'api_html' => ['.items', 'html'],
])->query()->getData()->get('api_html');

/** @var array $dt 获取接口列表 */
$dt = QueryList::getInstance()->html($apiHtml)->rules([
    'link' => ['a', 'href'],
    'title' => ['a', 'text'],
])->range('li')->query()->getData()->toArray();


$const = $var = '';//常量配置
$constArr = [];//常量
$apiDetail = [];//api详情
foreach($dt as $val){
    $title = $val['title'];//接口名称
    $link = $val['link'];//接口详情页地址

    $sql = QueryList::getInstance()->get($link);

    /** 接口地址 */
    $apiLink = $sql->find('.apiinfoitem  .am-text-success:eq(0)')->text();

    /** 解析接口路由 */
    $apiLinkInfo = parse_url($apiLink);
    $apiPath = $apiLinkInfo['path'];

    /** 常量名称 */
    $constName = join('_', array_map(function ($word){
        return strtoupper($word);
    }, array_filter(explode('/', $apiPath))));
    if (in_array($constName, $constArr)){
        continue;
    }
    $const .= "\t/** $title */\n";
    $const .= "\tconst $constName =" . "'$apiPath';\n\n";
    $var .= "\t\tself::$constName => ['title' => '$title', 'url' => '$link'],\n";

    $constArr[] = $constName;
    $apiDetail[] = [
        'title' => $title,
        'key' => $apiPath,
        'url' => $link
    ];

}

$str = "<?php \n\n";
$str .= "namespace zfy\\miao\\base; \n\n";
$str .= "/**喵有券开放平台 $apiUrl\n";
$str .= " * Class Interface\\baseLink \n";
$str .= " * @package zfy\\miao \n";
$str .= " */\n";
$str .= "interface BaseLink\n{\n\n";
$str .= "\tconst BASE_URL = 'http://api.web.21ds.cn';\n";
$str .= "\tconst USER_AP_KEY_NAME = 'apkey';\n";
$str .= "\tconst USER_PID_KEY = 'pid';\n";
$str .= "\tconst USER_TB_NAME_KEY = 'tbname';\n\n";

$str .= "\t/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */\n\n";
$str .= "$const\n\n";
$str .= "\t/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */\n\n";
$str .= "\tconst API_DETAIL = [\n $var \n\t];\n\n";
$str .= '}';

$fileName = __DIR__ . '/src/base/BaseLink.php';
$dir = dirname($fileName);
if (!is_dir($dir)){
    mkdir($dir, 0755, true);
}
file_put_contents($fileName, $str);

initLog('基础interface:BaseLink生成完成');

//生成请求api
initLog('开始生成请求api');

foreach($apiDetail as $info){

    $data = QueryList::getInstance()->get($info['url'])->rules([
        'param' => ['td:eq(0)', 'text'],
        'type' => ['td:eq(1)', 'text'],
        'require' => ['td:eq(3)', 'text'],
        'desc' => ['td:eq(4)', 'text']
    ])->range('.api-port-table:eq(0) .am-text-xs tr')->query()->getData()->toArray();


    $className = join('', array_map(function ($word){
        if (strpos($word, '_') === false){
            return ucfirst($word);
        }else{
            $str = join('', array_map(function ($v){
                return ucfirst($v);
            }, array_filter(explode('_', $word))));

            return $str;
        }
    }, array_filter(explode('/', $info['key']))));


    $constName = join('_', array_map(function ($word){
        return strtoupper($word);
    }, array_filter(explode('/', $info['key']))));

    $fileName = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'api' . DIRECTORY_SEPARATOR . $className . '.php';

    $dir = dirname($fileName);
    if (!is_dir($dir)){
        mkdir($dir, 0755, true);
    }
    $str = "<?php \n\n";
    $str .= "namespace zfy\\miao\\api; \n\n";
    $str .= "use zfy\\miao\\base\\BaseCall; \n\n";
    $str .= "/**$info[title]\n";
    $str .= " * @url $info[url]\n";
    $str .= " * Class $className\n";
    $str .= " * @package zfy\\miao\\api\n";
    $requireKey = [];
    $needPid = $needTbname = $needApkey = false;
    foreach($data as $val){
        $val['param'] == 'pid' && !empty($val['require']) && $needPid = true;
        $val['param'] == 'apkey' && !empty($val['require']) && $needApkey = true;
        $val['param'] == 'tbname' && !empty($val['require']) && $needTbname = true;

        !empty($val['require']) && $requireKey[] = $val['param'];
        $str .= " * @property $val[type] \$$val[param] " . str_replace(' ', '', $val['desc']) . "\n";
    }
    $str .= " */\n";
    $str .= "class $className extends BaseCall\n{\n\n";
    $needApkey && $str .= "\t" . 'protected $needApkey = true;' . "\n\n";
    $needPid && $str .= "\t" . 'protected $needPid = true;' . "\n\n";
    $needTbname && $str .= "\t" . 'protected $needTbname = true;' . "\n\n";

    $str .= "\t" . 'protected $requireKey = [' . join(', ', array_map(function ($k){
            return "'$k'";
        }, $requireKey)) . "];\n\n";
    $str .= "\t" . 'public function call($data = [])' . "\n\t{";
    $str .= "\t\t\n\t\t" . 'return $this->request(self::' . $constName . ', $data);' . "\n\t}\n";
    $str .= '}';

    file_put_contents($fileName, $str);
    initLog('接口' . $className . '生成成功');
}

initLog('请求api生成完成');

if (!is_dir(__DIR__ . '/temp/')){
    mkdir(__DIR__ . '/temp/', 0755,true);
}

$sqlStr = '';
foreach($apiDetail as $val){
    $key = $val['key'];

    $tableName = join('_', array_map(function ($word){
        if (strpos($word, '_') === false){
            return strtolower($word);
        }else{
            $str = join('_', array_map(function ($v){
                return strtolower($v);
            }, array_filter(explode('_', $word))));

            return $str;
        }
    }, array_filter(explode('/', $key))));

    $file = __DIR__ . '/temp/' . $tableName . '.sql';
    if (file_exists($file)){
        continue;
    }
    $title = $val['title'];
    $url = $val['url'];
    $data = QueryList::getInstance()->get($url)->rules([
        'param' => ['td:eq(0)', 'text'],
        'type' => ['td:eq(1)', 'text'],
        'desc' => ['td:eq(2)', 'text'],
        'extend_desc' => ['td:eq(3)', 'text']
    ])->range('.api-port-table:eq(1) .am-text-xs tr')->query()->getData(function ($item){
        preg_match('/\b[a-zA-Z_0-9]+\b/', $item['param'], $match);
        $item['param'] = $match[0];

        if (strtolower(substr($item['param'], -2)) == 'id'){
            $item['type'] = 'Number';
        }else{
            $item['type'] = 'String';
        }

        return $item;
    })->toArray();


    if (empty($data)){
        initLog($title . '文档未找到');
        continue;
    }


    $className = join('', array_map(function ($word){
        if (strpos($word, '_') === false){
            return ucfirst($word);
        }else{
            $str = join('', array_map(function ($v){
                return ucfirst($v);
            }, array_filter(explode('_', $word))));

            return $str;
        }
    }, array_filter(explode('/', $key))));

    //    $obj = call_user_func_array(['zfy\\miao\\api\\' . $className, 'getInstance'], $config);
    //    $dt = $obj->call();

    $str = "--\n\n-- Table structure for table `fa_$tableName`\n--\n\n";
    $str .= "DROP TABLE IF EXISTS `fa_$tableName`;\n";
    $str .= "/*!40101 SET @saved_cs_client     = @@character_set_client */;\n/*!40101 SET character_set_client = utf8 */;\n";
    $str .= "CREATE TABLE `fa_$tableName` (";
    $str .= "\n";
    $str .= "\t`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',\n\t";

    if ($data[0]['param'] == 'data'){
        unset($data[0]);
    }
    foreach($data as $column => $info){
        if ($info['type'] == 'String'){
            $str .= "`$info[param]` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '$info[desc]',";
        }else{
            $str .= "`$info[param]` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '$info[desc]',";
        }
        $str .= "\n\t";
    }
    $str .= "PRIMARY KEY (`id`)\n";
    $str .= ") ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='$title';\n";
    $str .= "/*!40101 SET character_set_client = @saved_cs_client */;\n\n";


    file_put_contents($file, $str);
    initLog($title . '===============>' . $file . '已创建');

    $sqlStr .= $str;
}

file_put_contents('install.sql', $sqlStr);
initLog('sql已创建');


//物料id
initLog('开始处理物料');
$data = [];
$url = 'https://tbk.bbs.taobao.com/detail.html?appId=45301&postId=8576096';
/** 相似推荐 */
$dt = QueryList::getInstance()->get($url)->rules([
    'type' => ['td:eq(0)', 'text'],
    'material_id' => ['td:eq(1)', 'text'],

])->range('tbody:eq(0) tr:gt(0)')->query()->getData()->toArray();
foreach($dt as $val){
    $val['desc'] = '相似推荐';
    $data[]=$val;
}

/** 猜你喜欢 */
$dt = QueryList::getInstance()->get($url)->rules([
    'type' => ['td:eq(0)', 'text'],
    'material_id' => ['td:eq(1)', 'text'],

])->range('tbody:eq(1) tr:gt(0)')->query()->getData()->toArray();
foreach($dt as $val){
    $val['desc'] = '猜你喜欢';
    $data[]=$val;
}

/** 实时热销榜 */
$dt = QueryList::getInstance()->get($url)->rules([
    'type' => ['tr:eq(0)', 'html'],
    'material_id' => ['tr:eq(1)', 'html'],
])->range('tbody:eq(2)')->query()->getData(function ($item){
    $type = QueryList::getInstance()->html($item['type'])->find('td')->texts()->toArray();
    $materail_id = QueryList::getInstance()->html($item['material_id'])->find('td')->texts()->toArray();

    return [
        'type' => $type,
        'material_id' => $materail_id
    ];
})->toArray();
$dt = current($dt);
foreach(array_combine($dt['material_id'], $dt['type']) as $key => $val){
    $data[] = [
        'type' => $val,
        'material_id' => $key,
        'desc'=>'实时热销榜'
    ];
}
/** 好券直播 */
for($i = 0; $i < 3; $i++){
    $p = $i * 3;
    $dt = QueryList::getInstance()->get($url)->rules([
        'type' => ['td:eq(' . $p . ')', 'text'],
        'material_id' => ['td:eq(' . ($p + 1) . ')', 'text'],
    ])->range('tbody:eq(4) tr:gt(0)')->query()->getData()->toArray();
    foreach($dt as $val){
        $val['desc'] = '好券直播';
        $data[] = $val;
    }
}
/** 大额券 */
for($i = 0; $i < 3; $i++){
    $p = $i * 3;
    $dt = QueryList::getInstance()->get($url)->rules([
        'type' => ['td:eq(' . $p . ')', 'text'],
        'material_id' => ['td:eq(' . ($p + 1) . ')', 'text'],
    ])->range('tbody:eq(5) tr:gt(0)')->query()->getData()->toArray();
    foreach($dt as $val){
        $val['desc'] = '大额券';
        $data[] = $val;
    }
}

/** 高佣榜 */
for($i = 0; $i < 3; $i++){
    $p = $i * 3;
    $dt = QueryList::getInstance()->get($url)->rules([
        'type' => ['td:eq(' . $p . ')', 'text'],
        'material_id' => ['td:eq(' . ($p + 1) . ')', 'text'],
    ])->range('tbody:eq(6) tr:gt(0)')->query()->getData()->toArray();
    foreach($dt as $val){
        $val['desc'] = '高佣榜';
        $data[] = $val;
    }
}
/** 品牌券 */
for($i = 0; $i < 3; $i++){
    $p = $i * 3;
    $dt = QueryList::getInstance()->get($url)->rules([
        'type' => ['td:eq(' . $p . ')', 'text'],
        'material_id' => ['td:eq(' . ($p + 1) . ')', 'text'],
    ])->range('tbody:eq(7) tr:gt(0)')->query()->getData()->toArray();
    foreach($dt as $val){
        $val['desc'] = '品牌券';
        $data[] = $val;
    }
}

/** 母婴主题 */
$dt = QueryList::getInstance()->get($url)->rules([
    'type' => ['td:eq(0)', 'text'],
    'material_id' => ['td:eq(1)', 'text'],

])->range('tbody:eq(8) tr:gt(0)')->query()->getData()->toArray();
foreach($dt as $val){
    $val['desc'] = '母婴主题';
    $data[]=$val;
}

$data[]=[
    'type'=>'有好货',
    'material_id'=>4092,
    'desc'=>'有好货',
];
$data[]=[
    'type'=>'潮流范',
    'material_id'=>4093,
    'desc'=>'潮流范',
];
$data[]=[
    'type'=>'特惠',
    'material_id'=>4094,
    'desc'=>'特惠',
];

$data = array_filter($data,function ($v){
    return !empty($v['type']) && !empty($v['material_id']);
});

file_put_contents('goods_material.php',"<?php \n return ".var_export($data,true).';');
initLog('物料处理完成');

/**
 * 请求接口返还回参数文档
 */
//foreach(BaseLink:: API_URL as $key => $url){
//    $data = QueryList::getInstance()->get($url)->rules([
//        'param' => ['td:eq(0)', 'text'],
//        'type' => ['td:eq(1)', 'text'],
//        'desc' => ['td:eq(2)', 'text'],
//        'extend_desc' => ['td:eq(3)', 'text']
//    ])->range('.api-port-table:eq(1) .am-text-xs tr')->query()->getData()->toArray();
//    print_r($data);
//}
