<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-28
 * Time: 17:15
 */

namespace zfy\miao\goodsInterface;


use zfy\miao\base\BaseCall;

/**专属店铺物料接口
 * Class getMaterialItem
 * @package zfy\miao\goodsInterface
 */
class getMaterialItem extends BaseCall
{
    protected $requireKey = ['apkey'];

    public function call($data = [])
    {
        return $this->request(self::GOODS_BELONG_MATERIAL_ITEM,$data);
    }

}