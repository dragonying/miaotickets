<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**猜你喜欢商品推荐
 * @url https://www.ecapi.cn/index/index/openapi/id/228.shtml?ptype=2
 * Class JingdongGetJdGoodsMaterial
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $eliteId 频道ID：1.猜你喜欢、2.实时热销、3.大额券、4.9.9包邮 示例值：1 
 * @property String $pageIndex 页码 示例值：1 
 * @property String $pageSize 每页数量，最大10 示例值：10 
 * @property String $sortName 排序字段(lowestPrice：最低价,inOrderCount30DaysSku：sku维度30天引单量，comments：评论数，goodComments：好评数) 示例值：inOrderCount30DaysSku 
 * @property String $sort asc,desc升降序,默认降序 示例值：desc 
 * @property String $pid 联盟id_应用id_推广位id，三段式 示例值： 
 * @property String $subUnionId 子联盟ID（需向我们申请），该字段为自定义参数，建议传入字母数字和下划线的格式 示例值：xxxx 
 * @property String $siteId 站点ID是指在联盟后台的推广管理中的网站Id、APPID（1、通用转链接口禁止使用社交媒体id入参；2、订单来源，即投放链接的网址或应用必须与传入的网站ID/AppID备案一致，否则订单会判“无效-来源与备案网址不符”） 示例值： 
 * @property String $positionId 推广位id 示例值：xxxx 
 * @property String $hasCoupon 1：只查询有最优券商品，不传值不做限制 示例值：1 
 * @property String $userIdType 用户ID类型，传入此参数可获得个性化推荐结果。当前userIdType支持的枚举值包括：8、16、32、64、128、32768。userIdType和userId需同时传入，且一一对应。userIdType各枚举值对应的userId含义如下：8(安卓移动设备Imei);16(苹果移动设备Openudid)；32(苹果移动设备idfa);64(安卓移动设备imei的md5编码，32位，大写，匹配率略低);128(苹果移动设备idfa的md5编码，32位，大写，匹配率略低);32768(安卓移动设备oaid) 示例值：32 
 * @property String $userId userIdType对应的用户设备ID，传入此参数可获得个性化推荐结果，userIdType和userId需同时传入 示例值：xxxx 
 * @property String $fields 支持出参数据筛选，逗号','分隔，目前可用：videoInfo(视频信息) 示例值：videoInfo 
 */
class JingdongGetJdGoodsMaterial extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'eliteId'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETJDGOODSMATERIAL, $data);
	}
}