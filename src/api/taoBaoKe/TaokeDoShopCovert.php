<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘宝客店铺转链API
 * @url https://www.ecapi.cn/index/index/openapi/id/86.shtml?ptype=1
 * Class TaokeDoShopCovert
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $pid 淘客PID 示例值：mm_123456_456789_789132 
 * @property String $user_ids 商家ID，可传入多个，传入多个时以英文逗号(,)分割，传入多个时暂不生成淘口令及短链接，店铺ID可使用此查询：https://open.21ds.cn/index/index/openapi/id/49.shtml?ptype=1 示例值：123456,789456 
 * @property Json $platformType 链接形式：1：PC，2：无线，默认：１ 示例值：1 
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页 示例值：xxxxxx 
 * @property Number $shorturl 是否生成短链接，1=生成，不填或填写其他为不生成，当商家ID为多个时，此参数不生效 示例值：1 
 * @property Number $tpwd 是否生成淘口令，1为生成，不填或填写其他为不生成，如果生成，则tpwdtitle参数必须传入，当商家ID为多个时此参数不生效 示例值：1 
 * @property String $tpwdpic 打开口令时显示的Logo图片 示例值：http://www.baidu.com/1.jpg 
 * @property String $tpwdtitle 打开口令时的提示文字，生成口令时必填 示例值：xxxxxx 
 * @property String $unid 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道 示例值：xxxxxx 
 */
class TaokeDoShopCovert extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'pid', 'user_ids', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_DOSHOPCOVERT, $data);
	}
}