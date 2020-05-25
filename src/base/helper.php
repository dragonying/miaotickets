<?php

if (!function_exists('value')){
    /**
     * Return the default value of the given value.
     *
     * @param mixed $value
     * @return mixed
     */
    function value($value)
    {
        return $value instanceof Closure ? $value() : $value;
    }
}


if (!function_exists('json_decode_P')){
    /**
     * same as json_decode
     * @param $json
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     * @return mixed
     */
    function json_decode_P($json, $assoc = true, $depth = 512, $options = JSON_BIGINT_AS_STRING)
    {
        return json_decode($json, $assoc, $depth, $options);
    }
}
if (!function_exists('logicError')){
    /**逻辑错误
     * @param $ErrorCode
     * @param $ErrorString
     * @param array $ErrorData
     * @param bool|null $isTrace
     * @throws \zfy\miao\base\UserRuntimeException
     */
    function logicError($ErrorCode, $ErrorString, array $ErrorData = [], bool $isTrace = null)
    {
        if (is_null($ErrorString)){
            $ErrorString = $ErrorCode;
        }

        if (!empty($ErrorString)){
            try{
                $ErrorString = 'error:' . $ErrorString;
            }catch(\Throwable $e){

            }
        }

        \zfy\miao\base\UserRuntimeException::throwException(
            $ErrorString,
            $ErrorCode,
            $ErrorData,
            $isTrace);
    }
}

if (!function_exists('logicErrorCondition')){
    /**逻辑错误条件表达式
     * @param $condition
     * @param $ErrorCode
     * @param $ErrorString
     * @param array $ErrorData
     * @throws \zfy\miao\base\UserRuntimeException
     */
    function logicErrorCondition($condition, $ErrorCode, $ErrorString, array $ErrorData = [])
    {
        if (!$condition){
            logicError($ErrorCode, $ErrorString, $ErrorData);
        }
    }
}

if (!function_exists('http_curl')){
    function http_curl($url, $type = 'post', $data = [], $addHeader = [], $timeout = 15, $https = false, $headers = false, $usecookie = false)
    {
        $results['error'] = '';
        $results['status'] = 0;
        $results['data'] = [];
        $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $curl = curl_init();                              // 启动一个CURL会话
        if ($type == 'post'){
            curl_setopt($curl, CURLOPT_POST, 1);                        // 发送一个常规的Post请求
            if (!empty($data) && is_array($data)){
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);              // Post提交的数据包
            }
        }else{
            $url = $url . '?' . http_build_query($data);
        }
        if ($https){
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);              // 对认证证书来源的检查
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);              // 从证书中检查SSL加密算法是否存在
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);              // 使用自动跳转
            curl_setopt($curl, CURLOPT_CAINFO, '/data/wwwroot/ecdaohang_applation/cacert.pem');
        }
        curl_setopt($curl, CURLOPT_URL, $url);                      // 要访问的地址
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);                    // 设置超时限制防止死循环
        if (!empty($addHeader) && is_array($addHeader)){
            curl_setopt($curl, CURLOPT_HTTPHEADER, $addHeader);
        }
        if ($headers){
            curl_setopt($curl, CURLOPT_HEADER, 1);
        }else{
            curl_setopt($curl, CURLOPT_HEADER, 0);
        }
        if ($usecookie){
            curl_setopt($curl, CURLOPT_COOKIEJAR, '/data/wwwroot/th_apps/tk_apps/runtime/a_cookie.txt');
            curl_setopt($curl, CURLOPT_COOKIEFILE, '/data/wwwroot/th_apps/tk_apps/runtime/a_cookie.txt');
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);              // 获取的信息以文件流的形式返回
        !empty($user_agent) && curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);          // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1);                 // 自动设置Referer

        $results['data'] = curl_exec($curl);                     // 执行操作
        if (curl_errno($curl)){
            $results['error'] = curl_error($curl);                    //捕抓异常
        }
        curl_close($curl);                                              // 关闭CURL会话

        return $results;
    }
}