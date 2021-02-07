<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**(重构)新渠道商一键备案API
 * @url https://www.ecapi.cn/index/index/openapi/id/75.shtml?ptype=1
 * Class TaokeGetRelationOauthTpwd
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $invitercode 渠道邀请码 示例值：123465 
 * @property String $rtag 自定义输入串，英文和数字组成，长度不能大于70个字符 示例值：123456 
 * @property String $content 淘口令弹窗标题 示例值：一键授权备案 
 * @property String $pic 淘口令弹窗图 示例值：https://img.taobao.com 
 */
class TaokeGetRelationOauthTpwd extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'invitercode', 'rtag', 'content'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETRELATIONOAUTHTPWD, $data);
	}
}