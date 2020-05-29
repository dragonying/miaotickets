<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘宝客渠道信息备案API
 * Class TaokeGetTbkQdBeiAn
 * @url https://open.21ds.cn/index/index/openapi/id/8.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String invitercode 淘宝客邀请渠道的邀请码
 * @property String infotype 1:渠道备案
 * @property String tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 * @property String relationfrom 渠道备案-来源，取链接的来源
 * @property String offlinescene 线下场景信息，1-门店，2-学校，3-工厂，4-其他
 * @property String onlinescene 线上场景信息，1-微信群，2-QQ群，3-其他
 * @property String note 媒体侧渠道备注
 * @property String tbappkey 具有淘宝客-工具-渠道推广专属权限的应用Appkey
 * @property String tbappsecret 具有淘宝客-工具-渠道推广专属权限的应用Appsecret
 * @property String tbsession 具有淘宝客-工具-渠道推广专属权限的应用授权获取到的用户Session
 */
class TaokeGetTbkQdBeiAn extends BaseCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'invitercode', 'infotype', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKQDBEIAN, $data);
	}
}