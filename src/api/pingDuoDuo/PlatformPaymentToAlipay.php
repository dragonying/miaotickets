<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**[平台重构版]转帐到支付宝帐户(付款)API
 * @url https://www.ecapi.cn/index/index/openapi/id/42.shtml?ptype=3
 * Class PlatformPaymentToAlipay
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $alipay 支付宝帐号，仅限输入手机号或邮箱，建议使用邮箱 示例值：支付宝帐号 
 * @property String $realname 支付宝真实姓名 示例值：xxxxx 
 * @property String $money 代付金额，单位：元，最少0.1元/笔，最高1000元/笔 示例值：20 
 * @property String $beizhu 打款说明 示例值：佣金发放 
 * @property String $thirdorder 第三方平台订单ID，会在通知时将此参数一起POST到通知接口上 示例值：20200101123512525 
 */
class PlatformPaymentToAlipay extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'alipay', 'realname', 'money', 'beizhu', 'thirdorder'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_PAYMENTTOALIPAY, $data);
	}
}