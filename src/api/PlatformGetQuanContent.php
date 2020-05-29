<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)发圈(朋友圈)内容API
 * Class PlatformGetQuanContent
 * @url https://open.21ds.cn/index/index/openapi/id/71.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property Number page 第几页
 * @property Number pagesize 每页几条数据
 */
class PlatformGetQuanContent extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'page', 'pagesize'];

	public function call($data = [])
	{		
		return $this->request(self::PLATFORM_GETQUANCONTENT, $data);
	}
}