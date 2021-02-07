<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘宝客渠道信息备案API
 * @url https://www.ecapi.cn/index/index/openapi/id/8.shtml?ptype=1
 * Class TaokeGetTbkQdBeiAn
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $invitercode 淘宝客邀请渠道的邀请码 示例值：r48Gjb 
 * @property String $infotype 1:渠道备案 示例值：1 
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页 示例值：xxxxx 
 * @property String $relationfrom 渠道备案-来源，取链接的来源 示例值： 
 * @property String $offlinescene 线下场景信息，1-门店，2-学校，3-工厂，4-其他 示例值：4 
 * @property String $onlinescene 线上场景信息，1-微信群，2-QQ群，3-其他 示例值：1 
 * @property String $note 媒体侧渠道备注 示例值：合伙人 
 * @property String $tbappkey 具有淘宝客-工具-渠道推广专属权限的应用Appkey 示例值：24700111 
 * @property String $tbappsecret 具有淘宝客-工具-渠道推广专属权限的应用Appsecret 示例值：291015383164edra91a3bf40f8cahca9a 
 * @property String $tbsession 具有淘宝客-工具-渠道推广专属权限的应用授权获取到的用户Session 示例值：70000xxxxxxxxxxxxxxxxxxxx 
 */
class TaokeGetTbkQdBeiAn extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'invitercode', 'infotype', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKQDBEIAN, $data);
	}
}