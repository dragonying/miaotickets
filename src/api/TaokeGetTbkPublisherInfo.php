<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘宝客渠道商信息查询API
 * @url https://open.21ds.cn/index/index/openapi/id/70.shtml?ptype=1
 * Class TaokeGetTbkPublisherInfo
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property Number $info_type 类型，必选1:渠道备案
 * @property String $relation_app 渠道推广的物料类型
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 * @property Number $relation_id 渠道备案-渠道关系ID
 * @property Number $page_no 第几页
 * @property Number $page_size 每页大小
 */
class TaokeGetTbkPublisherInfo extends BaseCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'info_type', 'relation_app', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKPUBLISHERINFO, $data);
	}
}