<?php 

namespace zfy\miao\api; 

use zfy\miao\base\BaseCall; 

/**(重构版)淘宝客订单查询API
 * @url https://open.21ds.cn/index/index/openapi/id/83.shtml?ptype=1
 * Class TaokeTbkOrderDetailsGet
 * @package zfy\miao\api
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要）
 * @property Number $query_type 查询时间类型，1：按照订单淘客创建时间查询，2:按照订单淘客付款时间查询，3:按照订单淘客结算时间查询
 * @property String $position_index 位点，除第一页之外，都需要传递；前端原样返回。
 * @property Number $page_size 页大小，默认20，1~100
 * @property Number $member_type 推广者角色类型,2:二方，3:三方，不传，表示所有角色
 * @property Number $tk_status 淘客订单状态，12-付款，13-关闭，14-确认收货，3-结算成功;不传，表示所有状态
 * @property String $end_time 订单查询结束时间，订单开始时间至订单结束时间，中间时间段日常要求不超过3个小时，但如618、双11、年货节等大促期间预估时间段不可超过20分钟，超过会提示错误，调用时请务必注意时间段的选择，以保证亲能正常调用！空格以+代替或者进行urlencode编码
 * @property String $start_time 订单查询开始时间，空格以+代替或者进行urlencode编码
 * @property String $jump_type 跳转类型，当向前或者向后翻页必须提供,-1:向前翻页,1：向后翻页
 * @property String $page_no 第几页，默认1，1~100
 * @property Number $order_scene 场景订单场景类型，1:常规订单，2:渠道订单，3:会员运营订单，默认为1
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 */
class TaokeTbkOrderDetailsGet extends BaseCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'end_time', 'start_time', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_TBKORDERDETAILSGET, $data);
	}
}