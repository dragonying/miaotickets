<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘宝客邀请码生成API
 * Class TaokeGetInviteCode
 * @url https://open.21ds.cn/index/index/openapi/id/7.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String relationapp 渠道推广的物料类型
 * @property String codetype 邀请码类型，1-渠道邀请，2-渠道裂变，3-会员邀请
 * @property String tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 * @property String relationid 渠道关系ID
 */
class TaokeGetInviteCode extends BaseCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'relationapp', 'codetype', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETINVITECODE, $data);
	}
}