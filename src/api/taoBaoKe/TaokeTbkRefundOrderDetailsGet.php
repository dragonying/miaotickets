<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**淘客维权退款订单查询API
 * @url https://www.ecapi.cn/index/index/openapi/id/206.shtml?ptype=1
 * Class TaokeTbkRefundOrderDetailsGet
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $page_size 每页数量 示例值：10 
 * @property Number $search_type 1-维权发起时间，2-订单结算时间（正向订单），3-维权完成时间，4-订单创建时间 示例值：1 
 * @property Number $refund_type 1表示2方，2表示3方，0表示不限 示例值：0 
 * @property String $start_time 开始时间 示例值：2018-11-11 00:01:01 
 * @property Number $page_no 页码 示例值：1 
 * @property String $biz_type 1代表渠道关系id，2代表会员关系id，3表示渠道+会员 示例值：1 
 * @property String $tbname 在本平台授权的淘宝用户名，有中文时需进行Urlencode编码 示例值：xxxx 
 */
class TaokeTbkRefundOrderDetailsGet extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'page_size', 'search_type', 'refund_type', 'start_time', 'page_no', 'biz_type', 'tbname'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_TBKREFUNDORDERDETAILSGET, $data);
	}
}