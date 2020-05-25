<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-24
 * Time: 21:40
 */

namespace zfy\miao\goodsInterface;


use zfy\miao\base\BaseCall;

/**获取简版淘客商品信息API
 * Class GoodsItemInfo
 * @package zfy\miao\goodsInterface
 * @property int $itemid 宝贝id
 * @property String $cat_name 一级类目名称
 * @property String $num_iid 商品id
 * @property String $title	 商品标题
 * @property String $pict_url 商品主图
 * @property String $small_images 商品小图列表
 * @property String $reserve_price 商品一口价格
 * @property String $zk_final_price 商品折扣价格
 * @property String $user_type 卖家类型 0表示淘宝店铺，1表示天猫店铺
 * @property String $provcity 商品所在地
 * @property String $item_url 商品链接
 * @property String $seller_id 卖家id
 * @property String $volume 30天销量
 * @property String $nick	 店铺名称
 * @property String $cat_leaf_name	 叶子类目名称
 * @property String $is_prepay		 是否加入消费者保障
 * @property String $shop_dsr	 店铺dsr 评分
 * @property String $ratesum	 卖家等级
 * @property String $i_rfd_rate	 退款率是否低于行业均值    true，是
 * @property String $h_good_rate	 好评率是否高于行业均值 true，是
 * @property String $h_pay_rate30	成交转化是否高于行业均值 true，是
 * @property String $free_shipment	 是否包邮 true，是
 * @property String $material_lib_type	 商品库类型  支持多库类型输出，以“，”区分，1:营销商品主推库
 * @property String $presale_discount_fee_text	 商品优惠信息 预售商品
 * @property String $presale_tail_end_time	 付尾款结束时间（毫秒）    预售商品
 * @property String $presale_tail_start_time	付尾款开始时间（毫秒）预售商品
 * @property String $presale_end_time	 付定金结束时间（毫秒）预售商品
 * @property String $presale_start_time	 付定金开始时间（毫秒）预售商品
 * @property String $presale_deposit	 定金（元）预售商品
 */
class GoodsItemInfo extends BaseCall
{

    public function setItemId($id)
    {
        $this->requestParam['itemid'] = $id;

        return $this;
    }


    public function call($data = [])
    {
        return $this->request(self::GOODS_ITEM_INFO, $data);
    }


}