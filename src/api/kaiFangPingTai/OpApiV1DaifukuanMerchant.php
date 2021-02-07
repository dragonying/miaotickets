<?php 

namespace zfy\miao\api\kaiFangPingTai; 

use zfy\miao\base\kaiFangPingTai\KaiFangPingTaiCall; 

/**[商户版]转帐到支付宝帐户(在线打款)API
 * @url https://www.ecapi.cn/index/index/openapi/id/84.shtml?ptype=4
 * Class OpApiV1DaifukuanMerchant
 * @package zfy\miao\api\kaiFangPingTai
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $beizhu 打款说明 示例值：佣金发放 
 * @property String $money 代付金额，单位：元，最少0.1元/笔，最高500元/笔 示例值：20 
 * @property String $realname 支付宝真实姓名 示例值：xxxxx 
 * @property String $alipay 支付宝帐号，仅限输入手机号或邮箱，建议使用邮箱 示例值：支付宝帐号 
 */
class OpApiV1DaifukuanMerchant extends KaiFangPingTaiCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'beizhu', 'money', 'realname', 'alipay'];

	public function call($data = [])
	{		
		return $this->request(self::OP_API_V1_DAIFUKUAN_MERCHANT, $data);
	}
}