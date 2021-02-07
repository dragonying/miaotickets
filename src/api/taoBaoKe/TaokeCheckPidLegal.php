<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**偷单检测
 * @url https://www.ecapi.cn/index/index/openapi/id/235.shtml?ptype=1
 * Class TaokeCheckPidLegal
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $tbname 如有中文，需进行urlencode编码 示例值：在本平台授权的淘客账号名 
 * @property String $pid 授权联盟下的PID 示例值：mm_123456_456789_789132 
 * @property String $content 淘客口令或淘客链接，需要进行urlencode编码（如果程序请求时默认编码则不用手动编码） 示例值：xxxx 
 */
class TaokeCheckPidLegal extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'tbname', 'pid', 'content'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_CHECKPIDLEGAL, $data);
	}
}