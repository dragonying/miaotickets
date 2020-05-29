<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)生成淘宝短链接API
 * @url https://open.21ds.cn/index/index/openapi/id/63.shtml?ptype=1
 * Class TaokeCreateTaoShortUrl
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $url 原始url,需进行urlencode编码，只支持uland.taobao.com，s.click.taobao.com，ai.taobao.com，temai.taobao.com的域名转换，否则判错
 */
class TaokeCreateTaoShortUrl extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'url'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_CREATETAOSHORTURL, $data);
	}
}