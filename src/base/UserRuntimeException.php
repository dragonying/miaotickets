<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-24
 * Time: 16:07
 */

namespace zfy\miao\base;

use Throwable;

/**
 * Class UserRuntimeException
 */
class UserRuntimeException extends \Exception
{

    protected $errorCode = '';

    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode(string $errorCode)
    {
        $this->errorCode = $errorCode;
    }

    protected $userData = [];

    /**
     * RuntimeException constructor.
     * @param \zfy\miao\base\string $message
     * @param \zfy\miao\base\string $errorCode
     * @param \Throwable|null $previous
     */
    public function __construct(string $message = "", string $errorCode = "", Throwable $previous = null)
    {
        $code = 0;
        if (is_numeric($errorCode)){
            $code = intval($errorCode);
        }
        $this->errorCode = $errorCode;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return array
     */
    public function getUserData(): array
    {
        return $this->userData;
    }

    /**获取附加数据
     * @param array $userData
     * @return \zfy\miao\base\UserRuntimeException
     */
    public function setUserData(array $userData): UserRuntimeException
    {
        $this->userData = $userData;

        return $this;
    }


    /**抛出异常
     * @param \zfy\miao\base\string $errorString
     * @param \zfy\miao\base\string $errorCode
     * @param array $userData
     * @param bool $isTrack
     * @throws \zfy\miao\base\UserRuntimeException
     */
    static function throwException(string $errorString, string $errorCode = "", array $userData = [], $isTrack = false)
    {
        $e = new UserRuntimeException($errorString, $errorCode);
        if ($isTrack){
            $userData['trace'] = static::getSimpleTrace();
        }else{
            unset($userData['trace']);
        }
        $e->setUserData($userData);
        throw $e;
    }

    /**
     *
     * @return array
     */
    public static function getSimpleTrace(\Throwable $e)
    {

        $originTraces = $e->getTrace();

        $convertTrace = [];

        $convertTrace [] = $e->getFile() .
                           "(" . $e->getLine() . "):"
                           . $e->getMessage();

        foreach($originTraces as $originTrace){
            $trace = "";

            if (isset($originTrace['file'])){
                $trace .= $originTrace['file'] . "(" . $originTrace['line'] . "):";
            }else{
                $trace .= "[internal function]" . ":";
            }

            if (isset($originTrace['class'])){
                $trace .= $originTrace['class'] . $originTrace['type'];
            }

            if (isset($originTrace['function'])){
                $trace .= $originTrace['function'];
            }

            $convertTrace[] = $trace;
        }

        return $convertTrace;

    }


}