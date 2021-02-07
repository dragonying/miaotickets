<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**按更新时间段增量获取推广订单
 * @url https://www.ecapi.cn/index/index/openapi/id/39.shtml?ptype=3
 * Class PinduoduoGetOauthIncrementOrderList
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $start_update_time 订单开始时间 示例值：1540736728 
 * @property Number $end_update_time 订单结束时间 示例值：1543415128 
 * @property String $pdname 在本平台授权后的拼多多用户名 示例值：xxxxx 
 * @property Number $page_size 每页中数据的数量 示例值：10 
 * @property Number $page 第几页 示例值：1 
 * @property String $pid 推广位ID 示例值：60000_2000 
 */
class PinduoduoGetOauthIncrementOrderList extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'start_update_time', 'end_update_time', 'pdname'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETOAUTHINCREMENTORDERLIST, $data);
	}
}