<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-24
 * Time: 16:40
 */

namespace zfy\miao\base;


/**基本调用
 * Class BaseCall
 * @package zfy\miao\base
 */
abstract class BaseCall
{
    protected $requireKey = [];//必传参数

    protected $needApkey  = false;//是否需要apkey


    use UserRuntimeExceptionTrait;
    use ParamsTrait;

    const  BASE_URL = 'http://api.web.ecapi.cn';//接口基地址
    const USER_AP_KEY_NAME = 'apkey';
    const HTTP_GET  = 'get';
    const HTTP_POST = 'post';


    const SERVER_NAME = 'miao_tickets';

    protected $requestParam  = [];
    protected $responseParam = [];

    protected $userApKey = '814e2b55-30b8-fb2a-c4d7-bc7d652901f8';// 平台apkey


    protected static $miao = null;



    /**基本配置
     * BaseCall constructor.
     * @param array $config
     */
    public function __construct($config = [])
    {
        isset($config[static::USER_AP_KEY_NAME]) && $this->setUserKey($config[static::USER_AP_KEY_NAME]);
    }

    /**基本配置
     * @param array $config
     * @return mixed
     */
//    public static function getInstance($config = [])
//    {
//        if (!static::$miao instanceof self){
//            static::$miao = new static();
//
//            isset($config[static::USER_AP_KEY_NAME]) && (static::$miao)->setUserKey($config[static::USER_AP_KEY_NAME]);
//            isset($config[static::USER_PID_KEY]) && (static::$miao)->setUserPid($config[static::USER_PID_KEY]);
//            isset($config[static::USER_TB_NAME_KEY]) && (static::$miao)->setTbName($config[static::USER_TB_NAME_KEY]);
//
//            return static::$miao;
//        }
//
//        return static::$miao;
//
//
//    }

    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;
    }


    /**创建url
     * @param string $serviceName
     * @param string $url
     * @return string
     * @throws \zfy\miao\base\UserRuntimeException
     */
    public static function createUrlWithServiceName(string $serviceName, string $url)
    {
        $map = [self::SERVER_NAME => self::BASE_URL];
        $domain = isset($map[$serviceName]) ? $map[$serviceName] : null;

        self::assertNotNull($domain, 500, "服务{$serviceName}不存在");

        return "$domain$url";
    }


    /**设置用户密钥
     * @param string $key
     */
    public function setUserKey(string $key)
    {
        $this->userApKey = $key;
    }

    /**用户apkey
     * @return string
     */
    public function getUserApkey()
    {
        return $this->userApKey;
    }


    /**重置参数
     * @param array $data
     * @return array
     */
    protected function buildParam(array $data = [])
    {
        $this->requestParam = array_merge($this->getRequestParam(), $data);

        /** 用户apkey */
        $this->needApkey && !isset($this->requestParam[self::USER_AP_KEY_NAME]) && $this->requestParam[self::USER_AP_KEY_NAME] = $this->getUserApkey();

        return $this->requestParam;
    }


    /**必传参数校验
     * @return bool
     * @throws \zfy\miao\base\UserRuntimeException
     */
    protected function checkParam()
    {
        if (!empty($this->requireKey)){
            $diff = array_diff($this->requireKey, array_keys($this->requestParam));
            self::assertTrue(empty($diff), 400, '参数校验失败!!!! 缺少参数' . join(',', $diff));

            return true;
        }

        return true;
    }

    /**请求参数
     * @return array
     */
    public function getRequestParam()
    {
        return $this->requestParam;
    }

    /**获取必须参数
     * @return array
     */
    public function getRequireKey(){
        return $this->requireKey;
    }


    /**调用
     * @param string $url
     * @param array $param
     * @param string $method
     * @return array
     * @throws \zfy\miao\base\UserRuntimeException
     */
    public function request(string $url, array $param = [], string $method = 'get')
    {
        $url = $this->createUrlWithServiceName(static::SERVER_NAME, $url);
        $par = $this->buildParam($param);

        $this->checkParam();
        $res = http_curl($url, $method, $par);

        self::assertTrue(isset($res['data']), 50000, '请求错误！！！');
        $data = $res['data'];
        try{
            $data = json_decode($data, 'true');
        }catch(\Throwable $e){
            self::assert($e->getCode(), $e->getMessage());
        }
        $code = $data['code'] ?? 0;
        $list = $data['data'] ?? [];
        $msg = $data['msg'] ?? '';

        self::assertTrue($code == 200, $code, $msg);

        $this->responseParam = $list;

        return $list;
    }

    abstract function call($data = []);

}