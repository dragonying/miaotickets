<?php
/**
 * Created by PhpStorm.
 * User: fangying.zhong
 * Date: 2021/2/7 0007
 * Time: 15:35
 */
require_once  __DIR__.'./vendor/autoload.php';

//$tb =  new \zfy\miao\api\taoBaoKe\TaokeGetMaterialItem();
//
//$res = $tb->call([
//    'materialid'=>'27548'
//]);

//$mt = new \zfy\miao\api\meiTuan\PlatformMeituanV2();
//$res = $mt->call([
//    'eid'=>'zfy'
//]);
//$mt = new \zfy\miao\api\meiTuan\PlatformMeituanShangou();


//$pdd = new \zfy\miao\api\pingDuoDuo\PinduoduoGetThemeList();
//$res = $pdd->call([
//    'eid'=>'zfy'
//]);
//print_r($res);
//
//$pdd = new \zfy\miao\api\pingDuoDuo\PinduoduoGetThemeGoodsList();
//$res = $pdd->call([
//    'theme_id'=>'7609'
//]);

//唯品会
$vip = new \zfy\miao\api\weiPinHui\VipGetUnionGoodsList();
$res = $vip->call([
    'page'=>1,
    'channelType'=>0,
]);
print_r($res);