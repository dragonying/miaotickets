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
abstract class BaseCall implements BaseLink
{
    protected $requireKey = [];//必传参数

    protected $needPid   = false;//是否需要pid
    protected $needApkey = true;//是否需要apkey

    use UserRuntimeExceptionTrait;
    use ParamsTrait;

    const HTTP_GET  = 'get';
    const HTTP_POST = 'post';


    const SERVER_NAME = 'miao_tickets';

    protected $requestParam  = [];
    protected $responseParam = [];

    protected $userApKey = '1ff02c39-59fc-1385-a385-17cb6542c736';
    protected $userPid   = 'mm_475220038_1478550448_110210900247';

    protected $client;

    protected $baseUrl = self::BASE_URL;

    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;
    }


    /**创建url
     * @param \zfy\miao\base\string $serviceName
     * @param \zfy\miao\base\string $url
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
     * @param \zfy\miao\base\string $key
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
        /** 用户pid */
        $this->needPid && !isset($this->requestParam[self::USER_PID_KEY]) && $this->requestParam[self::USER_PID_KEY] = $this->getUserPid();

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

    /**用户pid
     * @return string
     */
    public function getUserPid()
    {
        return $this->userPid;
    }

    public function setUserPid($pid)
    {
        $this->userPid = $pid;

        return $this;
    }

    /**请求参数
     * @return array
     */
    public function getRequestParam()
    {
        return $this->requestParam;
    }


    /**调用
     * @param \zfy\miao\base\string $url
     * @param array $param
     * @param \zfy\miao\base\string $method
     * @return array
     */
    public function request(string $url, array $param = [], string $method = self::HTTP_GET)
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

    //    public static function findOne($condition){
    //       return (new static())->call();
    //    }


    abstract function call($data = []);

}