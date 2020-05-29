<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘礼金创建 API
 * @url https://open.21ds.cn/index/index/openapi/id/40.shtml?ptype=1
 * Class TaokeCreateTaolijin
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $tbappkey 有淘礼金权限的Appkey，不知道有没有的登录：open.taobao.com，进行查看
 * @property String $tbappsecret 有淘礼金权限的Appkey对应的Appsecret，不知道有没有的登录：open.taobao.com，进行查看
 * @property String $adzoneid 
 * @property String $itemid 宝贝id
 * @property String $end_time 发放结束时间
 * @property String $start_time 发放开始时间
 * @property String $num 淘礼金总个数
 * @property String $name 淘礼金名称，最小5个字符，最大10个字符
 * @property Number $win_limit 单用户累计中奖次数上限
 * @property String $secure 安全开关，启动安全：true；不启用安全：false
 * @property String $money 单个淘礼金面额，单位元
 * @property String $jihua_type CPS佣金计划类型，定向：DX；鹊桥：LINK_EVENT；营销：MKT
 */
class TaokeCreateTaolijin extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'tbappkey', 'tbappsecret', 'adzoneid', 'itemid', 'end_time', 'start_time', 'num', 'name', 'win_limit', 'secure', 'money'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_CREATE_TAOLIJIN, $data);
	}
}