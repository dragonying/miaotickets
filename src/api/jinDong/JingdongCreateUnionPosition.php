<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**创建推广位
 * @url https://www.ecapi.cn/index/index/openapi/id/57.shtml?ptype=2
 * Class JingdongCreateUnionPosition
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $key_id 联盟调用key，会员中心京东授权列表页获取 示例值：xxxxx 
 * @property Number $unionType 1：cps推广位2：cpc推广位 示例值：1 
 * @property Number $type 站点类型1网站推广位2.APP推广位3.社交媒体推广位4.聊天工具推广位5.二维码推广 示例值：1 
 * @property String $spaceNameList 推广位名称集合，英文,分割，上限50 示例值：test 
 * @property Number $siteId 站点ID，即网站ID/appID/snsID,当type传入4以外的值时，siteId为必填 示例值：1000 
 */
class JingdongCreateUnionPosition extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'key_id', 'unionType', 'type', 'spaceNameList'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_CREATEUNIONPOSITION, $data);
	}
}