<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**sclick链接解析api
 * @url https://www.ecapi.cn/index/index/openapi/id/45.shtml?ptype=1
 * Class TaokeSclicktoid
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $sclickurl 淘宝长链接或短链接 示例值：https://s.click.taobao.com 
 */
class TaokeSclicktoid extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'sclickurl'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_SCLICKTOID, $data);
	}
}