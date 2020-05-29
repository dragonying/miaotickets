<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘宝联盟官方活动推广API
 * Class TaokeGetTbkActivityLink
 * @url https://open.21ds.cn/index/index/openapi/id/69.shtml?ptype=1
 * @package zfy\miao\api
 * @property String apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property String pid pid
 * @property String tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 * @property Number activity_id 官方活动ID，从官方活动页获取
 * @property String union_id 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
 * @property Number relation_id 渠道关系ID，仅适用于渠道推广场景
 * @property Number platform 1：PC，2：无线，默认：１
 * @property Number hastpwd 是否生成淘口令，1为生成，不填或填写其他为不生成，如果生成，则tpwd_title参数必须传入，否则不生效
 * @property String tpwd_title 与hastpwd配合使用
 * @property String tpwd_logo 淘口令弹窗图
 */
class TaokeGetTbkActivityLink extends BaseCall
{

	protected $needApkey = true;

	protected $needPid = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'pid', 'tbname', 'activity_id'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETTBKACTIVITYLINK, $data);
	}
}