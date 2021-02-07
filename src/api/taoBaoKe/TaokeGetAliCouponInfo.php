<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**优惠券信息查询
 * @url https://www.ecapi.cn/index/index/openapi/id/227.shtml?ptype=1
 * Class TaokeGetAliCouponInfo
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $me 带券ID与商品ID的加密串 示例值：nfr%2BYTo2k1PX18gaNN%2BIPkIG2PadNYbBnwEsv6mRavWieOoOE3L9OdmbDSSy 
 * @property String $item_id 商品ID 示例值：xxxx 
 * @property String $activity_id 券ID 示例值： 
 */
class TaokeGetAliCouponInfo extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETALICOUPONINFO, $data);
	}
}