<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**获取爆款排行商品
 * @url https://www.ecapi.cn/index/index/openapi/id/176.shtml?ptype=3
 * Class PinduoduoGetTopGoodsList
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $p_id  示例值：推广位ID 
 * @property String $offset 从多少位置开始请求；默认值：0，offset需是limit的整数倍，仅支持整页翻页 示例值：0 
 * @property String $sort_type 1-实时热销榜；2-实时收益榜 示例值：1 
 * @property String $list_id 翻页时必填前页返回的list_id值 示例值：xx 
 * @property Number $limit 请求数量；默认值：20 示例值：20 
 */
class PinduoduoGetTopGoodsList extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETTOPGOODSLIST, $data);
	}
}