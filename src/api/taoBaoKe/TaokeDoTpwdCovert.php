<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘口令解析&amp;转链
 * @url https://www.ecapi.cn/index/index/openapi/id/87.shtml?ptype=1
 * Class TaokeDoTpwdCovert
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pid 淘客PID，联盟后台获取 示例值：mm_123456_456789_789132 
 * @property String $content 带淘口令的内容 示例值：₤xxxxxxxq₤ 
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页 示例值：xxxxxx 
 */
class TaokeDoTpwdCovert extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'pid', 'content', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_DOTPWDCOVERT, $data);
	}
}