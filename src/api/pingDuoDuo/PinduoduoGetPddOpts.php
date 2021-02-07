<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**获取拼多多opt商品标签列表
 * @url https://www.ecapi.cn/index/index/openapi/id/60.shtml?ptype=3
 * Class PinduoduoGetPddOpts
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $parent_opt_id 值=0时为顶点opt_id,通过树顶级节点获取opt树 示例值：0 
 */
class PinduoduoGetPddOpts extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'parent_opt_id'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETPDDOPTS, $data);
	}
}