<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**淘宝标题分词 API
 * @url https://open.21ds.cn/index/index/openapi/id/41.shtml?ptype=1
 * Class OpApiV1Titlefc
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $title 商品标题
 */
class OpApiV1Titlefc extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'title'];

	public function call($data = [])
	{		
		return $this->request(self::OP_API_V1_TITLEFC, $data);
	}
}