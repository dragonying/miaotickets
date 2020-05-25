<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-25
 * Time: 12:21
 */

namespace zfy\miao\goodsInterface;


use zfy\miao\base\BaseCall;

/**淘宝商品分类API
 * Class TbCateGory
 * @package zfy\miao\goodsInterface
 * @property integer $cid 分类ID，默认为0，为顶级分类，输入分类ID后可查询该ID下的所有分类
 * @property string $parent_cid 上级分类ID
 * @property string $name 分类名
 */
class TbCateGory extends BaseCall
{
    public function call($data = [])
    {
        return $this->request(self::TB_CATEGORY, $data);
    }

}