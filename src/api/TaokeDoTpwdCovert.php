<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘口令解析&amp;转链
 * @url https://open.21ds.cn/index/index/openapi/id/87.shtml?ptype=1
 * Class TaokeDoTpwdCovert
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $pid 淘客PID，联盟后台获取
 * @property String $content 带淘口令的内容
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 */
class TaokeDoTpwdCovert extends BaseCall
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