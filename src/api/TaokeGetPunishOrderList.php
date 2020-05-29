<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)处罚订单获取接口
 * Class TaokeGetPunishOrderList
 * @url https://open.21ds.cn/index/index/openapi/id/30.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 * @property String site_id pid中的第二段，siteId
 * @property Number span 查询时间跨度，不超过30天，单位是天
 * @property String relation_id 渠道关系id
 * @property String tb_trade_id 子订单号
 * @property String page_size 每页数量
 * @property Number page_no 第几页，默认：1
 * @property String start_time 查询开始时间，以淘客订单创建时间开始
 * @property Number adzone_id pid中的第三段，adzoneId
 */
class TaokeGetPunishOrderList extends BaseCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETPUNISHORDERLIST, $data);
	}
}