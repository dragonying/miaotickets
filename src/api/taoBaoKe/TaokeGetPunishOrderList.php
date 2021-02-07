<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**处罚订单获取接口
 * @url https://www.ecapi.cn/index/index/openapi/id/30.shtml?ptype=1
 * Class TaokeGetPunishOrderList
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页 示例值：xxxxxx 
 * @property String $site_id pid中的第二段，siteId 示例值：xxxxxx 
 * @property Number $span 查询时间跨度，不超过30天，单位是天 示例值：10 
 * @property String $relation_id 渠道关系id 示例值：xxxxxx 
 * @property String $tb_trade_id 子订单号 示例值：xxxxxx 
 * @property String $page_size 每页数量 示例值：10 
 * @property Number $page_no 第几页，默认：1 示例值：1 
 * @property String $start_time 查询开始时间，以淘客订单创建时间开始 示例值：2018-11-11 00:01:01 
 * @property Number $adzone_id pid中的第三段，adzoneId 示例值：xxxxxx 
 */
class TaokeGetPunishOrderList extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETPUNISHORDERLIST, $data);
	}
}