<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**获取商品或店铺推广链接接口
 * @url https://www.ecapi.cn/index/index/openapi/id/208.shtml?ptype=7
 * Class SuningDoItemStorePromotionUrl
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $commCode 商品编码，如果商品编码不为空，则生成商品推广链接，否则生成店铺推广链接 示例值：150020195 
 * @property String $mertCode 商家编码(供应商编码)10位数字 示例值：0070057321 
 * @property String $urlType url类型1:长链接2:短链接 示例值：1 
 * @property String $subUser 子会员id，不可输入带_的数据 示例值： 
 */
class SuningDoItemStorePromotionUrl extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'mertCode'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_DOITEMSTOREPROMOTIONURL, $data);
	}
}