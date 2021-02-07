<?php 

namespace zfy\miao\base\meiTuan; 

/**喵有券开放平台 
 * Class Interface\BaseLink 
 * @package zfy\miao\meiTuan
 */
interface BaseLink
{

	/** ------- 接口路由  -------------   接口路由   --------   接口路由   ---------- 接口路由 --------  */

	/** 美团外卖红包 */
	const PLATFORM_MEITUAN_V2 ='/platform/meituan_v2';

	/** 美团闪购CPS推广 */
	const PLATFORM_MEITUAN_SHANGOU ='/platform/meituan_shangou';

	/** 订单获取接口 */
	const PLATFORM_DMORDER ='/platform/dmOrder';



	/** ------- 接口详情  -------------   接口详情   --------   接口详情   ---------- 接口详情 --------  */

	const API_DETAIL = [
 		self::PLATFORM_MEITUAN_V2 => ['title' => '美团外卖红包', 'url' => 'http://api.web.ecapi.cn/platform/meituan_v2'],
		self::PLATFORM_MEITUAN_SHANGOU => ['title' => '美团闪购CPS推广', 'url' => 'http://api.web.ecapi.cn/platform/meituan_shangou'],
		self::PLATFORM_DMORDER => ['title' => '订单获取接口', 'url' => 'http://api.web.ecapi.cn/platform/dmOrder'],
 
	];
}