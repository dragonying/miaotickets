<?php 

namespace zfy\miao\api\kaoLaHaiGou; 

use zfy\miao\base\kaoLaHaiGou\KaoLaHaiGouCall; 

/**获取推荐商品列表
 * @url https://www.ecapi.cn/index/index/openapi/id/251.shtml?ptype=10
 * Class KaolaGetRecommendGoodsList
 * @package zfy\miao\api\kaoLaHaiGou
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $categoryId 类目ID，110022=宠物；9691=服装鞋靴；381=个人洗护；836=环球美食；372=家居生活；437=美容彩妆；438=母婴；8096=汽车用品；8115=生鲜；1092=手表配饰；440=数码家电；1025=箱包；837=医药健康；7578=运动户外 示例值：110022 
 * @property Number $sortType 1:按佣金比例排序默认2:按佣金排序3:按黑卡价格排序4:按普通价格排序5:按30天黑卡用户销量排序6:按黑卡价差进行排序 示例值：1 
 * @property Number $desc 0倒序默认1升序 示例值：0 
 * @property Number $pageIndex 页码 示例值：1 
 * @property String $pageSize 每页数量默认1000（最大值）最小20 示例值：20 
 * @property Number $self 0全部1自营2非自营 示例值：0 
 */
class KaolaGetRecommendGoodsList extends KaoLaHaiGouCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'sortType', 'pageIndex'];

	public function call($data = [])
	{		
		return $this->request(self::KAOLA_GETRECOMMENDGOODSLIST, $data);
	}
}