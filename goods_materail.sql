DROP TABLE IF EXISTS `fa_goods_material`;
CREATE TABLE `fa_goods_material` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`title` varchar(255) NOT NULL DEFAULT '' COMMENT '物料名称',
	`material_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '物料ID',
	`type` varchar(255) NOT NULL DEFAULT '' COMMENT '所属类型',
	`create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='商品物料id';

insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('相似推荐',13256,'相似推荐',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('含全部商品',6708,'猜你喜欢',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('营销商品库商品（此为具备“私域用户管理-会员运营管理功能”的媒体专用）',28017,'猜你喜欢',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('综合',28026,'实时热销榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('大服饰',28029,'实时热销榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('大快消',28027,'实时热销榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('电器美家',28028,'实时热销榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('综合',3756,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('女装',3767,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('家居家装',3758,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('数码家电',3759,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('鞋包配饰',3762,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('美妆个护',3763,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('男装',3764,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('内衣',3765,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('母婴',3760,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('食品',3761,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('运动户外',3766,'好券直播',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('综合',9660,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('女装',9658,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('家居家装',9655,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('数码家电',9656,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('鞋包配饰',9648,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('美妆个护',9653,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('男装',9654,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('内衣',9652,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('母婴',9650,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('食品',9649,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('运动户外',9651,'大额券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('综合',13366,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('女装',13367,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('家居家装',13368,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('数码家电',13369,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 鞋包配饰',13370,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 美妆个护',13371,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 男装',13372,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 内衣',13373,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 母婴',13374,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 食品',13375,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 运动户外',13376,'高佣榜',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('综合',3786,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('女装',3788,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('家居家装',3792,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('数码家电',3793,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 鞋包配饰',3796,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 美妆个护',3794,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 男装',3790,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 内衣',3787,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 母婴',3789,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 食品',3791,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values(' 运动户外',3795,'品牌券',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('母婴_备孕',4040,'母婴主题',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('母婴_0至6个月',4041,'母婴主题',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('母婴_4至6岁',4044,'母婴主题',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('母婴_7至12个月',4042,'母婴主题',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('母婴_1至3岁',4043,'母婴主题',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('母婴_7至12岁',4045,'母婴主题',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('有好货',4092,'有好货',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('潮流范',4093,'潮流范',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
insert into `fa_goods_material`(`title`,`material_id`,`type`,`create_time`,`update_time`) values('特惠',4094,'特惠',UNIX_TIMESTAMP(),UNIX_TIMESTAMP());
