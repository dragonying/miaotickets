<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘口令生成API
 * @url https://open.21ds.cn/index/index/openapi/id/3.shtml?ptype=1
 * Class TaokeCreateTaoPwd
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String $url 淘口令链接
 * @property String $title 淘口令弹窗文字，不能少于5个字符
 * @property String $pic 商品图片链接，用于打开口令时显示
 */
class TaokeCreateTaoPwd extends BaseCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'url', 'title'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_CREATETAOPWD, $data);
	}
}