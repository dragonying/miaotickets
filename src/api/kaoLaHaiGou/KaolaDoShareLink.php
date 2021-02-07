<?php 

namespace zfy\miao\api\kaoLaHaiGou; 

use zfy\miao\base\kaoLaHaiGou\KaoLaHaiGouCall; 

/**批量转链接口
 * @url https://www.ecapi.cn/index/index/openapi/id/255.shtml?ptype=10
 * Class KaolaDoShareLink
 * @package zfy\miao\api\kaoLaHaiGou
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $linkList 需要转链的链接，必须是考拉链接，多个链接以,分割，最多可输入20个链接 示例值：https://goods.kaola.com/product/6072826.html,https://goods.kaola 
 * @property String $trackingCode1 渠道参数1，可自定义，订单中会原样返回 示例值：xxxx 
 * @property String $trackingCode2 渠道参数2，可自定义，订单中会原样输出 示例值：xxxx 
 */
class KaolaDoShareLink extends KaoLaHaiGouCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'linkList'];

	public function call($data = [])
	{		
		return $this->request(self::KAOLA_DOSHARELINK, $data);
	}
}