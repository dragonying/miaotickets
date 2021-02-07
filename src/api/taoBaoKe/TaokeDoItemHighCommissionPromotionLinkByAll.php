<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**万能转链API接口
 * @url https://www.ecapi.cn/index/index/openapi/id/72.shtml?ptype=1
 * Class TaokeDoItemHighCommissionPromotionLinkByAll
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $extsearch 官方查不到券时是否去第三方平台查询，1为启用 示例值：1 
 * @property String $tpwdpic 商品图片链接，用于打开口令时显示，不填写默认为商品主图 示例值： 
 * @property Number $tpwd 是否生成淘口令，1为生成，不填则不生成 示例值：1 
 * @property Number $shorturl 是否需要短链接，1为生成，不填则不生成 示例值：1 
 * @property String $relationid 渠道关系ID，仅适用于渠道推广场景（选填）当入参relationId的时候，必须确保adzoneid为对应合作方账号下的专属pid。后台会进行专属pid和relationId进行校验，校验通过才可以正常推广结算 示例值：23223 
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页 示例值：xxx 
 * @property String $activityid 阿里妈妈推广券ID 示例值：7d6e6619ff754e1e94ea140e2a82240f 
 * @property String $pid 推广位ID（*必须是授权淘宝号下的推广位） 示例值：mm_0000_0000_000 
 * @property Number $content 口令/链接等内容 示例值：xxxxx 
 * @property String $hasiteminfo 是否输出商品信息，双十一期间不建议启用，1=启用，0=不启用 示例值：0 
 * @property String $external_id 淘宝客外部用户标记，如自身系统账户ID；微信ID等 示例值： 
 * @property String $special_id 会员运营ID 示例值：xxxx 
 * @property String $xid 团长与下游渠道合作的特殊标识，用于统计渠道推广效果 示例值：xxxx 
 */
class TaokeDoItemHighCommissionPromotionLinkByAll extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'tbname', 'pid', 'content'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_DOITEMHIGHCOMMISSIONPROMOTIONLINKBYALL, $data);
	}
}