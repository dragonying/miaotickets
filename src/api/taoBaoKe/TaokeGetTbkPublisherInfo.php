<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘宝客渠道商信息查询API
 * @url https://www.ecapi.cn/index/index/openapi/id/70.shtml?ptype=1
 * Class TaokeGetTbkPublisherInfo
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $info_type 类型，必选1:渠道备案 示例值：1 
 * @property String $relation_app 渠道推广的物料类型 示例值：common 
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页 示例值：xxxxx 
 * @property Number $relation_id 渠道备案-渠道关系ID 示例值：123 
 * @property Number $page_no 第几页 示例值：1 
 * @property Number $page_size 每页大小 示例值：123 
 * @property String $special_id 会员独占-会员运营ID 示例值：xxxx 
 * @property String $external_id 淘宝客外部用户标记，如自身系统账户ID；微信ID等 示例值：xxxx 
 */
class TaokeGetTbkPublisherInfo extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'info_type', 'relation_app', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKPUBLISHERINFO, $data);
	}
}