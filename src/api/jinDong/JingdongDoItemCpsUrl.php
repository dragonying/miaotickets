<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**获取商品推广链接(支持subUnionId)
 * @url https://www.ecapi.cn/index/index/openapi/id/56.shtml?ptype=2
 * Class JingdongDoItemCpsUrl
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $materialId 京东商品链接或京东短链接，需要使用Urlencode进行编码，建议链接使用微Q前缀，能较好适配微信手Q页面 示例值：https%3a%2f%2fwqitem.jd.com%2fitem%2fview%3fsku%3d23484023378 
 * @property String $key_id 联盟调用key，会员中心京东授权列表页获取 示例值：xxxx 
 * @property Number $positionId 新增推广位id（不填的话，为其默认生成一个唯一此接口推广位-名称：微信手Q短链接） 示例值： 
 * @property String $couponUrl 优惠券领取链接，在使用优惠券、商品二合一功能时入参，且materialId须为商品详情页链接，需进行Urlencode编码 示例值： 
 * @property Number $chainType 转链类型，1：长链，2：短链，3：长链+短链，默认短链 示例值：3 
 * @property String $subUnionId 子联盟ID 示例值： 
 * @property String $pid 子帐号身份标识，格式为子站长ID_子站长网站ID_子站长推广位ID 示例值： 
 * @property Number $autoSearch 是否启用优惠券自动搜索功能，如启用且优惠券链接未传入时，系统会自动查询优惠券 示例值：1 
 * @property String $giftCouponKey 礼金批次号 示例值：xxx_coupon_key 
 */
class JingdongDoItemCpsUrl extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'materialId', 'key_id'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_DOITEMCPSURL, $data);
	}
}