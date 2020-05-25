<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-24
 * Time: 22:20
 */

namespace zfy\miao\base;

/**参数设置与获取
 * Trait ParamsTrait
 * @package zfy\miao\base
 */
trait ParamsTrait
{
    protected $requestParam  = [];
    protected $responseParam = [];


    public function __set($name, $value)
    {
        !isset($this->requestParam[$name]) && $this->requestParam[$name] = $value;

    }

    public function __get($name)
    {
        return isset($this->responseParam[$name]) ? $this->responseParam[$name] : null;

    }

    public function getRequestParam()
    {
        return $this->requestParam;
    }

    public function getResponseParam()
    {
        return $this->responseParam;
    }
}