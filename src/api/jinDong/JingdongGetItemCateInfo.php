<?php 

namespace zfy\miao\api\jinDong; 

use zfy\miao\base\jinDong\JinDongCall; 

/**商品类目查询
 * @url https://www.ecapi.cn/index/index/openapi/id/26.shtml?ptype=2
 * Class JingdongGetItemCateInfo
 * @package zfy\miao\api\jinDong
 * @property String $apkey 用户中心-系统设置-平台设置中查看APKEY密钥(点击进入)（*必要） 示例值：xxxxxxx 
 * @property Number $parent_id 父类目id(一级父类目为0) 示例值：0 
 * @property Number $grade 类目级别0，1，2代表一、二、三级类目 示例值：0 
 */
class JingdongGetItemCateInfo extends JinDongCall
{

	protected $needApkey = true;

	protected $requireKey = ['apkey', 'parent_id', 'grade'];

	public function call($data = [])
	{		
		return $this->request(self::JINGDONG_GETITEMCATEINFO, $data);
	}
}