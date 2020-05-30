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


function initLog($str)
{
    global $logFile;
    file_put_contents($logFile, date('Y-m-d H:i:s u') . ' --- ' . $str . "\n\r", FILE_APPEND);
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
