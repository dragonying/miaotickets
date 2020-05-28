<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2020-05-28
 * Time: 17:03
 */

namespace zfy\miao\transLinkInterface;


use zfy\miao\base\BaseCall;

/**高佣转链接API(淘口令)
 * Class HighPromotionByTwd
 * @package zfy\miao\transLinkInterface
 * @property String $tpwdcode 任意淘口令
 * @property String $pid 推广位ID（*必须是授权淘宝号下的推广位）
 * @property integer $activityid 阿里妈妈推广券ID
 * @property String $tbname 在本平台授权的淘客账号所对应的用户名，见“会员中心”-“账号授权”-“淘宝授权”列表页
 * @property String $relationid 渠道关系ID，仅适用于渠道推广场景（选填）当入参relationId的时候，必须确保adzoneid为对应合作方账号下的专属pid。后台会进行专属pid和relationId进行校验，校验通过才可以正常推广结算。
 * @property integer $shorturl 是否需要短链接，1为生成，不填则不生成
 * @property integer $tpwd 是否生成淘口令，1为生成，不填则不生成
 * @property String $tpwdpic 商品图片链接，用于打开口令时显示，不填写默认为商品主图
 * @property integer $extsearch 官方查不到券时是否去第三方平台查询，1为启用
 * @property integer $hasiteminfo 是否输出商品信息，双十一期间不建议启用，1=启用，0=不启用
 */
class HighPromotionByTwd extends BaseCall
{
    protected $requireKey = [
        'apkey',
        'tpwdcode',
        'pid',
        'tbname'
    ];

    public function call($data = [])
    {
        return $this->request(self::HIGH_PROMOTION_LINK_BY_T_PWD, $data);
    }

}