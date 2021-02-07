<?php 

namespace zfy\miao\base\taoBaoKe; 

use zfy\miao\base\BaseCall; 

/**
 * Class abstract\TaoBaoKeCall 
 * @package zfy\miao\taoBaoKe
 */
abstract class TaoBaoKeCall extends BaseCall implements BaseLink
{

    const USER_PID_KEY     = 'pid';
    const USER_TB_NAME_KEY = 'tbname';

    protected $userPid = 'mm_475220038_2200950351_111113400336';
    protected $tbname  = '钟房英624168796';

    protected $needTbname = false;//是否需要淘宝名称
    protected $needPid    = false;//是否需要pid




    public function __construct($config = [])
    {
        parent::__construct($config);
        isset($config[static::USER_PID_KEY]) && $this->setUserPid($config[static::USER_PID_KEY]);
        isset($config[static::USER_TB_NAME_KEY]) && $this->setTbName($config[static::USER_TB_NAME_KEY]);
    }

    protected function buildParam(array $data = [])
    {
        $this->requestParam = array_merge($this->getRequestParam(), $data);

        /** 用户apkey */
        $this->needApkey && !isset($this->requestParam[self::USER_AP_KEY_NAME]) && $this->requestParam[self::USER_AP_KEY_NAME] = $this->getUserApkey();
        /** 用户pid */
        $this->needPid && !isset($this->requestParam[self::USER_PID_KEY]) && $this->requestParam[self::USER_PID_KEY] = $this->getUserPid();

        /** 淘宝名称tbname */
        $this->needTbname && !isset($this->requestParam[self::USER_TB_NAME_KEY]) && $this->requestParam[self::USER_TB_NAME_KEY] = $this->getTbName();

        return $this->requestParam;
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

    /**淘宝名称
     * @return string
     */
    public function getTbName()
    {
        return $this->tbname;
    }

    public function setTbName($name)
    {
        $this->tbname = $name;

        return $this;
    }
}