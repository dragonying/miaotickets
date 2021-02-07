<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**查询推广位
 * @url https://www.ecapi.cn/index/index/openapi/id/58.shtml?ptype=2
 * Class JingdongGetUnionPosition
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $key_id 联盟调用key，会员中心京东授权列表页获取，链接：http://openapi.weimohe.cn/user/oauth/newjingdong.shtml 示例值：xxxx 
 * @property Number $unionType 联盟推广位类型，1：cps推广位2：cpc推广位 示例值：1 
 * @property Number $pageIndex 页码，上限10000 示例值：1 
 * @property Number $pageSize 每页条数，上限100 示例值：100 
 */
class JingdongGetUnionPosition extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key_id', 'unionType', 'pageIndex', 'pageSize'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETUNIONPOSITION, $data);
	}
}