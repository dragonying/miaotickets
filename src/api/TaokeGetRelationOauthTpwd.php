<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构)新渠道商一键备案API
 * Class TaokeGetRelationOauthTpwd
 * @url https://open.21ds.cn/index/index/openapi/id/75.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String invitercode 渠道邀请码
 * @property String rtag 自定义输入串，英文和数字组成，长度不能大于70个字符
 * @property String content 淘口令弹窗标题
 * @property String pic 淘口令弹窗图
 */
class TaokeGetRelationOauthTpwd extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'invitercode', 'rtag', 'content'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETRELATIONOAUTHTPWD, $data);
	}
}