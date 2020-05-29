<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)全网淘客商品查询API
 * @url https://open.21ds.cn/index/index/openapi/id/9.shtml?ptype=1
 * Class TaokeGetTkMaterialItem
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $pid 淘宝联盟PID
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 * @property String $startdsr 店铺dsr评分，筛选高于等于当前设置的店铺dsr评分的商品0-50000之间
 * @property String $pagesize 每页数据多少条，1~100
 * @property String $pageno 第几页
 * @property String $platform 链接形式：1：PC，2：无线，默认：１
 * @property String $endtkrate 淘客佣金比率上限，如：1234表示12.34%
 * @property String $starttkrate 淘客佣金比率下限，如：1234表示12.34%
 * @property String $endprice 折扣价范围上限，单位：元
 * @property String $startprice 折扣价范围下限，单位：元
 * @property String $isoverseas 是否海外商品，设置为true表示该商品是属于海外商品，设置为false或不设置表示不判断这个属性
 * @property String $istmall 是否商城商品，设置为true表示该商品是属于淘宝商城商品，设置为false或不设置表示不判断这个属性
 * @property String $sort 排序_des（降序），排序_asc（升序），销量（total_sales），淘客佣金比率（tk_rate），累计推广量（tk_total_sales），总支出佣金（tk_total_commi），价格（price）
 * @property String $itemloc 所在地
 * @property String $cat 后台类目ID，用,分割，最大10个，该ID可以通过taobao.itemcats.get接口获取到，或者加我们官方群，在群文件中有整理过的分类文件
 * @property String $keyword 查询词，可直接传入商品链接进行精准搜索，或者使用高佣转链接口进行搜索：http://open.21ds.cn/index/index/openapi/id/1.shtml?ptype=1
 * @property String $hascoupon 是否有优惠券，设置为true表示该商品有优惠券，设置为false或不设置表示不判断这个属性
 * @property String $ip ip参数影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
 * @property String $includerfdrate 退款率是否低于行业均值
 * @property String $includegoodrate 好评率是否高于行业均值
 * @property String $includepayrate 成交转化是否高于行业均值
 * @property String $needprepay 是否加入消费者保障，true表示加入，空或false表示不限
 * @property String $needfreeshipment 是否包邮，true表示包邮，空或false表示不限
 * @property String $npxlevel 牛皮癣程度，取值：1:不限，2:无，3:轻微
 * @property Number $end_ka_tk_rate KA媒体淘客佣金比率上限，如：1234表示12.34%
 * @property Number $start_ka_tk_rate KA媒体淘客佣金比率下限，如：1234表示12.34%
 * @property String $device_value 设备号加密后的值
 * @property String $device_encrypt 设备号加密类型：MD5
 * @property String $device_type 设备号类型：IMEI，或者IDFA，或者UTDID
 * @property Number $material_id 官方的物料Id(详细物料id见：https://tbk.bbs.taobao.com/detail.html?appId=45301&amp;postId=8576096)，不传时默认为2836
 * @property Number $ver_code 接口数据版本，不传或传100为默认版，101为新版，带有商品数量统计，数据格式与默认版不同，需注意
 */
class TaokeGetTkMaterialItem extends BaseCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'pid', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTKMATERIALITEM, $data);
	}
}