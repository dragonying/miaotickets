<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**淘宝标题分词 API
 * Class Op_api_v1Titlefc
 * @url https://open.21ds.cn/index/index/openapi/id/41.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String title 商品标题
 */
class Op_api_v1Titlefc extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'title'];

	public function call($data = [])
	{		
		return $this->request(self::OP_API_V1_TITLEFC, $data);
	}
}