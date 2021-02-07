<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**京东商品查询API
 * @url https://www.ecapi.cn/index/index/openapi/id/51.shtml?ptype=2
 * Class JingdongGetJdUnionItems
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $skuIds skuIds集合，最大支持100个商品，可为空。如果传值，忽略其他查询条件。 示例值：000000,11111 
 * @property String $cid1 一级类目id 示例值：xxxx 
 * @property String $cid2 二级类目id 示例值：xxxx 
 * @property String $cid3 三级类目id 示例值：xxxx 
 * @property String $keyword 商品关键词，字数同京东商品名称一致，目前未限制，可传入联盟推广链接查询指定商品 示例值：xxxx 
 * @property String $pageIndex 页码 示例值：1 
 * @property String $pageSize 每页数量，单页数最大30，默认20 示例值：20 
 * @property String $pricefrom 商品价格下限 示例值：16.88 
 * @property String $priceto 商品价格上限 示例值：19.88 
 * @property String $commissionShareStart 佣金比例区间开始 示例值：10 
 * @property String $commissionShareEnd 佣金比例区间结束 示例值：50 
 * @property String $pageSize 每页数量，单页数最大30，默认20 示例值：Number 
 * @property String $owner 商品类型：自营[g]，POP[p] 示例值：g 
 * @property String $sortName 排序字段(price：单价,commissionShare：佣金比例,commission：佣金，inOrderCount30Days：30天引单量，inOrderComm30Days：30天支出佣金) 示例值：price 
 * @property String $sort asc,desc升降序,默认降序 示例值：desc 
 * @property String $isCoupon 是否是优惠券商品，1：有优惠券，0：无优惠券 示例值：1 
 * @property String $isPG 是否是拼购商品，1：拼购商品，0：非拼购商品 示例值：0 
 * @property String $pingouPriceStart 拼购价格区间开始 示例值：16.88 
 * @property String $pingouPriceEnd 拼购价格区间结束 示例值：19.88 
 * @property String $hasContent 1：查询内容商品；其他值过滤掉此入参条件。 示例值：1 
 * @property String $brandCode 品牌code 示例值：7998 
 * @property String $shopId 店铺Id 示例值：45619 
 * @property String $hasBestCoupon 1：查询有最优惠券商品；其他值过滤掉此入参条件。 示例值：1 
 * @property String $pid 联盟id_应用iD_推广位id 示例值：618_618_618 
 * @property String $fields 支持出参数据筛选，逗号','分隔，目前可用：videoInfo(视频信息),hotWords(热词),similar(相似推荐商品),documentInfo(段子信息) 示例值：videoInfo 
 * @property String $forbidTypes 微信京东购物小程序禁售商品过滤规则，入参表示不展示该规则数据，支持多个逗号','分隔，2:OTC商品;3:加油卡;4:游戏充值卡;5:合约机;6:京保养;7:虚拟组套;8:定制商品 示例值：2,3,5 
 * @property String $jxFlags 京喜商品类型，1京喜、2京喜工厂直供、3京喜优选（包含3时可在京东APP购买），入参多个值表示或条件查询，多个值需用,分割 示例值：1,2 
 * @property String $shopLevelFrom 支持传入0.0、2.5、3.0、3.5、4.0、4.5、4.9，默认为空表示不筛选评分 示例值：3.5 
 */
class JingdongGetJdUnionItems extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETJDUNIONITEMS, $data);
	}
}