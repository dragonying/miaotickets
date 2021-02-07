<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘客官方活动(饿了么)推广
 * @url https://www.ecapi.cn/index/index/openapi/id/193.shtml?ptype=1
 * Class TaokeGetTbkActivityInfo
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $tbname 在本平台授权的淘宝用户名，有中文时需进行Urlencode编码 示例值：xxxx 
 * @property String $pid 淘宝联盟PID 示例值：mm_123456_456789_789132 
 * @property String $activity_material_id 活动ID，支持通过推广位和活动物料id获取活动详情，包含推广url（长链、短链），淘口令、微信推广二维码地址等。淘宝联盟官方活动推广API-工具，支持二方、三方 示例值：xxxx 
 * @property String $relation_id 渠道关系id 示例值：xxxx 
 * @property String $hastpwd 是否生成淘口令，1为生成，不填或填写其他为不生成，如果生成，则tpwd_title参数必须传入，否则不生效 示例值：1 
 * @property String $tpwd_title 与hastpwd配合使用 示例值：淘口令标题 
 * @property String $union_id 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道 示例值：Vxxxxxxx 
 */
class TaokeGetTbkActivityInfo extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'tbname', 'pid', 'activity_material_id'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKACTIVITYINFO, $data);
	}
}