<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)物料精选[猜你喜欢]
 * @url https://open.21ds.cn/index/index/openapi/id/97.shtml?ptype=1
 * Class TaokeGetMaterialItem
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $pid pid
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 * @property Number $materialid 请求API参数中materialid设置为6708，同时传入用户设备信息，即可返回个性化的推荐结果。官方的物料Id(详细物料id见：https://tbk.bbs.taobao.com/detail.html?appId=45301&amp;postId=8576096)
 * @property Number $pagesize 页大小，默认20，1~100
 * @property String $pageno 第几页，默认：1
 * @property String $device_value 智能匹配-设备号加密后的值（MD5加密需32位小写）
 * @property String $device_encrypt 智能匹配-设备号加密类型：MD5
 * @property String $device_type 智能匹配-设备号类型：IMEI，或者IDFA，或者UTDID（UTDID不支持MD5加密），或者OAID
 * @property String $content_id 内容专用-内容详情ID
 * @property String $content_source 内容专用-内容渠道信息
 * @property Number $item_id 商品ID，用于相似商品推荐
 * @property String $relationId 渠道ID
 */
class TaokeGetMaterialItem extends BaseCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'pid', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETMATERIALITEM, $data);
	}
}