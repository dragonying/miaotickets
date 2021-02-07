<?php 

namespace zfy\miao\api\kaoLaHaiGou; 

use zfy\miao\base\kaoLaHaiGou\KaoLaHaiGouCall; 

/**商品搜索接口
 * @url https://www.ecapi.cn/index/index/openapi/id/254.shtml?ptype=10
 * Class KaolaSearchGoods
 * @package zfy\miao\api\kaoLaHaiGou
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $keyWord 搜索关键字 示例值：显示器 
 * @property Json $trackingCode1 渠道参数1，可自定义，订单中会原样返回 示例值：xxxx 
 * @property String $trackingCode2 渠道参数2，可自定义，订单中会原样输出 示例值：xxxx 
 * @property Number $type 排序方式0综合排序1价格排序2销量排序10佣金比例排序默认0排序方式 示例值：0 
 * @property String $desc 是否降序，只对价格排序方式有效，默认降序true降序flase升序 示例值：true 
 * @property Number $pageNo 页码默认第一页 示例值：1 
 * @property Number $pageSize 每次查询数量默认20 示例值：20 
 * @property String $skipNoCommission 是否跳过没有佣金的商品默认跳过true跳过false不跳过 示例值：true 
 */
class KaolaSearchGoods extends KaoLaHaiGouCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'keyWord'];

	public function call($data = [])
	{		
		return $this->request(self::KAOLA_SEARCHGOODS, $data);
	}
}