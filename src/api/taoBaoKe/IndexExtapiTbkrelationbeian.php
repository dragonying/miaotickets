<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**渠道商一键备案API
 * @url https://www.ecapi.cn/index/index/openapi/id/74.shtml?ptype=1
 * Class IndexExtapiTbkrelationbeian
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $infotype 1:渠道备案 示例值：1 
 * @property String $relationfrom 渠道备案-来源，取链接的来源 示例值： 
 * @property Number $offlinescene 线下场景信息，1-门店，2-学校，3-工厂，4-其他 示例值：4 
 * @property Number $onlinescene 线上场景信息，1-微信群，2-QQ群，3-其他 示例值：1 
 * @property String $note 媒体侧渠道备注 示例值： 
 * @property String $invitercode 淘宝客邀请渠道的邀请码 示例值： 
 * @property String $custompar 自定义输入串，英文和数字组成，长度不能大于20个字符 示例值：123465 
 * @property String $return_url 备案成功后跳转地址，需将网址进行Urlencode编码，带备案返回数据，不填则返回JSON 示例值：https%3a%2f%2fopen.21ds.cn 
 * @property String $oauth_style 授权登录页面样式，wap为H5版，web为网页版，不填默认为H5版 示例值：wap 
 */
class IndexExtapiTbkrelationbeian extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'infotype', 'invitercode'];

	public function call($data = [])
	{		
		return $this->request(self::INDEX_EXTAPI_TBKRELATIONBEIAN, $data);
	}
}