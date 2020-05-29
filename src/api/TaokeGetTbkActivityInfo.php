<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘客官方活动推广(更新版)
 * Class TaokeGetTbkActivityInfo
 * @url https://open.21ds.cn/index/index/openapi/id/193.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String tbname 在本平台授权的淘宝用户名，有中文时需进行Urlencode编码
 * @property String pid 淘宝联盟PID
 * @property String activity_material_id 活动ID，支持通过推广位和活动物料id获取活动详情，包含推广url（长链、短链），淘口令、微信推广二维码地址等。淘宝联盟官方活动推广API-工具，支持二方、三方
 * @property String relation_id 渠道关系id
 * @property String hastpwd 是否生成淘口令，1为生成，不填或填写其他为不生成，如果生成，则tpwd_title参数必须传入，否则不生效
 * @property String tpwd_title 与hastpwd配合使用
 */
class TaokeGetTbkActivityInfo extends BaseCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'tbname', 'pid', 'activity_material_id'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKACTIVITYINFO, $data);
	}
}