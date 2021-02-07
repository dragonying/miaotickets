<?php 

namespace zfy\miao\api\suNing; 

use zfy\miao\base\suNing\SuNingCall; 

/**关键字商品查询接口(新)
 * @url https://www.ecapi.cn/index/index/openapi/id/214.shtml?ptype=7
 * Class SuningGetSearchItems
 * @package zfy\miao\api\suNing
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pageIndex 页码默认为1 示例值：1 
 * @property String $keyword 关键字 示例值：手机 
 * @property String $saleCategoryCode 销售目录ID 示例值： 
 * @property String $cityCode 城市编码默认025 示例值：025 
 * @property String $suningService 是否苏宁自营默认为空，1：是 示例值： 
 * @property String $pgSearch 是否拼购默认为空1：是 示例值： 
 * @property String $startPrice 开始价格 示例值： 
 * @property String $endPrice 结束价格 示例值： 
 * @property String $sortType 排序规则1：综合（默认）2：销量由高到低3：价格由高到低4：价格由低到高5：佣金比例由高到低6：佣金金额由高到低7：两个维度，佣金金额由高到低，销量由高到低8：近30天推广量由高到低9：近30天支出佣金金额由高到低。 示例值：1 
 * @property String $picWidth 图片宽度默认200 示例值： 
 * @property String $picHeight 图片高度默认200 示例值：200 
 * @property String $size 每页条数默认10 示例值：10 
 * @property String $branch 1：减枝2：不减枝sortType=1（综合）默认不剪枝其他排序默认剪枝 示例值：1 
 * @property String $coupon 1：有券；其他：全部 示例值： 
 * @property String $snfwservice 是否苏宁服务1:是 示例值： 
 * @property String $snhwg 是否苏宁国际1:是 示例值： 
 */
class SuningGetSearchItems extends SuNingCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::SUNING_GETSEARCHITEMS, $data);
	}
}