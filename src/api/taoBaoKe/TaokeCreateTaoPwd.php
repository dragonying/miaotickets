<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘口令生成API
 * @url https://www.ecapi.cn/index/index/openapi/id/3.shtml?ptype=1
 * Class TaokeCreateTaoPwd
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $url 淘口令链接 示例值：https://uland.taobao.com/coupon/edetail?e=/cdD+DRbmSoGQAStt 
 * @property String $title 淘口令弹窗文字，不能少于5个字符 示例值：优惠商品，抢先购买 
 * @property String $pic 商品图片链接，用于打开口令时显示 示例值： 
 */
class TaokeCreateTaoPwd extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'url', 'title'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_CREATETAOPWD, $data);
	}
}