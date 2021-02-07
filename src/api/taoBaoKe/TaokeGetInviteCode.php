<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘宝客邀请码生成API
 * @url https://www.ecapi.cn/index/index/openapi/id/7.shtml?ptype=1
 * Class TaokeGetInviteCode
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $relationapp 渠道推广的物料类型 示例值：common 
 * @property String $codetype 邀请码类型，1-渠道邀请，2-渠道裂变，3-会员邀请 示例值：1 
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页 示例值：xxxxx 
 * @property String $relationid 渠道关系ID 示例值： 
 */
class TaokeGetInviteCode extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'relationapp', 'codetype', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETINVITECODE, $data);
	}
}