<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-24
 * Time: 17:21
 */

namespace zfy\miao\base;

require_once 'helper.php';

/**
 * Trait UserRuntimeExceptionTrait
 */
trait UserRuntimeExceptionTrait
{
    /**中断
     * @param \zfy\miao\base\string $ErrorCode
     * @param \zfy\miao\base\string|null $ErrorString
     * @param array $ErrorData
     * @throws \zfy\miao\base\UserRuntimeException
     */
    public static function assert(string $ErrorCode, string $ErrorString = null, array $ErrorData = [])
    {
        logicErrorCondition(false, $ErrorCode, $ErrorString, $ErrorData);
    }

    /**为真
     * @param \zfy\miao\base\bool $condition
     * @param \zfy\miao\base\string $ErrorCode
     * @param \zfy\miao\base\string|null $ErrorString
     * @param array $ErrorData
     * @throws \zfy\miao\base\UserRuntimeException
     */
    public static function assertTrue(bool $condition, string $ErrorCode, string $ErrorString = null, array $ErrorData = [])
    {
        logicErrorCondition($condition, $ErrorCode, $ErrorString, $ErrorData);
    }

    /**为假
     * @param \zfy\miao\base\bool $condition
     * @param \zfy\miao\base\string $ErrorCode
     * @param \zfy\miao\base\string|null $ErrorString
     * @param array $ErrorData
     * @throws \zfy\miao\base\UserRuntimeException
     */
    public static function assertFalse(bool $condition, string $ErrorCode, string $ErrorString = null, array $ErrorData = [])
    {
        logicErrorCondition(!$condition, $ErrorCode, $ErrorString, $ErrorData);
    }

    /**null
     * @param $value
     * @param \zfy\miao\base\string $ErrorCode
     * @param \zfy\miao\base\string|null $ErrorString
     * @param array $ErrorData
     * @throws \zfy\miao\base\UserRuntimeException
     */
    public static function assertNull($value, string $ErrorCode, string $ErrorString = null, array $ErrorData = [])
    {
        logicErrorCondition(is_null($value), $ErrorCode, $ErrorString, $ErrorData);
    }

    /**不为空
     * @param $value
     * @param \zfy\miao\base\string $ErrorCode
     * @param \zfy\miao\base\string|null $ErrorString
     * @param array $ErrorData
     * @throws \zfy\miao\base\UserRuntimeException
     */
    public static function assertNotNull($value, string $ErrorCode, string $ErrorString = null, array $ErrorData = [])
    {
        logicErrorCondition(!is_null($value), $ErrorCode, $ErrorString, $ErrorData);
    }

    /**包含
     * @param $value
     * @param array $choices
     * @param \zfy\miao\base\string $ErrorCode
     * @param \zfy\miao\base\string|null $ErrorString
     * @param array $ErrorData
     * @throws \zfy\miao\base\UserRuntimeException
     */
    public static function assertContains($value, array $choices, string $ErrorCode, string $ErrorString = null, array $ErrorData = [])
    {
        foreach($choices as $choice){
            if ($choice === $value){
                return;
            }
        }
        logicError($ErrorCode, $ErrorString, $ErrorData);
    }

}