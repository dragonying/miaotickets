<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**权益物料精选
 * @url https://www.ecapi.cn/index/index/openapi/id/249.shtml?ptype=1
 * Class TaokeGetPromotionItem
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $tbname 在本平台授权的淘宝用户名 示例值：xxxx 
 * @property String $pid 授权联盟账号下的PID 示例值：mm_123456_456789_789132 
 * @property String $promotion_id 官方提供的权益物料Id。有价券-37104、大额店铺券-37116，更多权益物料id敬请期待！ 示例值：37116 
 * @property Number $pageno 页码 示例值：1 
 * @property Number $pagesize 页大小，每次请求限制10以内 示例值：10 
 */
class TaokeGetPromotionItem extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'tbname', 'pid', 'promotion_id'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETPROMOTIONITEM, $data);
	}
}