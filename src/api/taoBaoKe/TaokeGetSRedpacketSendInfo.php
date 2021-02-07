<?php 

namespace zfy\miao\api\taoBaoKe; 

use zfy\miao\base\taoBaoKe\TaoBaoKeCall; 

/**查询超级红包发放个数
 * @url https://www.ecapi.cn/index/index/openapi/id/241.shtml?ptype=1
 * Class TaokeGetSRedpacketSendInfo
 * @package zfy\miao\api\taoBaoKe
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $tbname 在本平台授权的淘宝用户名，有中文时需进行Urlencode编码 示例值：xxxx 
 * @property Number $biz_date 统计日期 示例值：20201021 
 * @property String $relation_id 渠道关系id 示例值：xxxx 
 * @property String $activity_id 2020双11大促活动id：1306 示例值：1306 
 * @property String $page_no 页码 示例值：1 
 * @property String $page_size 每页大小 示例值：10 
 */
class TaokeGetSRedpacketSendInfo extends TaoBaoKeCall
{

	protected $needApkey = true;

	protected $needTbname = true;

	protected $requireKey = ['apkey', 'tbname', 'biz_date', 'activity_id'];

	public function call($data = [])
	{		
		return $this->request(self::TAOKE_GETSREDPACKETSENDINFO, $data);
	}
}