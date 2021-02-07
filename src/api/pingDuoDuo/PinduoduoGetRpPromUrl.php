<?php 

namespace zfy\miao\api\pingDuoDuo; 

use zfy\miao\base\pingDuoDuo\PingDuoDuoCall; 

/**生成营销工具推广链接
 * @url https://www.ecapi.cn/index/index/openapi/id/234.shtml?ptype=3
 * Class PinduoduoGetRpPromUrl
 * @package zfy\miao\api\pingDuoDuo
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property String $p_id_list 推广位列表 示例值：60005_612,60005_613 
 * @property String $pdname 在本平台授权的拼多多用户名 示例值：xxxx 
 * @property Number $channel_type -1-活动列表，0-默认红包，2–新人红包，3-刮刮卡，4-转盘，5-员工内购，6-购物车，7-大促会场 示例值：0 
 * @property String $custom_parameters 自定义参数，为链接打上自定义标签；自定义参数最长限制64个字节；格式为：{"uid":"11111","sid":"22222"}，其中uid用户唯一标识，可自行加密后传入，每个用户仅且对应一个标识，必填；sid上下文信息标识，例如sessionId等，非必填。该json字符串中也可以加入其他自定义的key 示例值：xxxx 
 * @property Number $opt_id 转盘优先展示类目 示例值：1 
 * @property Number $range_from 转盘区间的开始值 示例值：xxxx 
 * @property Number $range_id 转盘，range_id为1表示价格（单位分），range_id为2表示商品佣金（单位千分之几) 示例值：1 
 * @property Number $range_to 转盘区间的结束值 示例值：xxxx 
 * @property String $amount_probability 红包金额列表，200、300、500、1000、2000，单位分。红包金额和红包抵后价设置只能二选一，默认设置了红包金额会忽略红包抵后价设置 示例值：100,200 
 * @property String $dis_text 红包设置玩法，false-现金红包,true-现金券 示例值：xxxx 
 * @property String $not_show_background 红包推广页设置，false-红包开启页,true-红包领取页 示例值：xxxx 
 * @property String $diy_red_opt_id 红包优先展示类目 示例值：xxxx 
 * @property Number $diy_red_range_from 红包区间的开始值 示例值：1 
 * @property Number $diy_red_range_id 红包，range_id为1表示红包抵后价（单位分），range_id为2表示佣金比例（单位千分之几) 示例值：1 
 * @property Number $diy_red_range_to 红包区间的结束值 示例值：1 
 * @property String $generate_qq_app 是否生成qq小程序 示例值：true 
 * @property String $generate_schema_url 是否返回schemaURL 示例值：true 
 * @property String $generate_short_url 是否生成短链接。true-是，false-否，默认false 示例值：true 
 * @property String $generate_we_app 是否生成小程序推广 示例值：true 
 */
class PinduoduoGetRpPromUrl extends PingDuoDuoCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'p_id_list', 'pdname'];

	public function call($data = [])
	{		
		return $this->request(self::PINDUODUO_GETRPPROMURL, $data);
	}
}