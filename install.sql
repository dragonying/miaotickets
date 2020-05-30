--

-- Table structure for table `fa_platform_gettbcategory`
--

DROP TABLE IF EXISTS `fa_platform_gettbcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_platform_gettbcategory` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`parent_cid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID',
	`cid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '当前分类ID',
	`name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '分类名',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝商品分类API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_getiteminfo`
--

DROP TABLE IF EXISTS `fa_taoke_getiteminfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_getiteminfo` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`cat_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '一级类目名称',
	`num_iid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
	`title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品标题',
	`pict_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品主图',
	`small_images` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品小图列表',
	`reserve_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品一口价格',
	`zk_final_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品折扣价格',
	`user_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '卖家类型',
	`provcity` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品所在地',
	`item_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品链接',
	`seller_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '卖家id',
	`volume` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '30天销量',
	`nick` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺名称',
	`cat_leaf_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '叶子类目名称',
	`is_prepay` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否加入消费者保障',
	`shop_dsr` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺dsr 评分',
	`ratesum` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '卖家等级',
	`i_rfd_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '退款率是否低于行业均值',
	`h_good_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '好评率是否高于行业均值',
	`h_pay_rate30` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '成交转化是否高于行业均值',
	`free_shipment` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否包邮',
	`material_lib_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品库类型',
	`presale_discount_fee_text` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品优惠信息',
	`presale_tail_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付定金结束时间（毫秒）',
	`presale_tail_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付尾款开始时间（毫秒）',
	`presale_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付定金结束时间（毫秒）',
	`presale_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付定金开始时间（毫秒）',
	`presale_deposit` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '定金（元）',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)获取简版淘客商品信息API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_getmaterialitem`
--

DROP TABLE IF EXISTS `fa_taoke_getmaterialitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_getmaterialitem` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`coupon_amount` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息-优惠券面额。',
	`small_images` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息-商品小图列表',
	`shop_title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺信息-店铺名称',
	`category_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品信息-叶子类目id',
	`coupon_start_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息-优惠券起用门槛，满X元可用。',
	`item_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品信息-宝贝id',
	`coupon_total_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息-优惠券总量',
	`user_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺信息-卖家类型',
	`zk_final_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息-商品折扣价',
	`coupon_remain_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息-优惠券剩余量',
	`commission_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息-佣金比率(%)',
	`coupon_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息-优惠券开始时间',
	`title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息-商品标题',
	`item_description` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息-宝贝描述',
	`seller_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '店铺信息-卖家id',
	`volume` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息-30天销量',
	`coupon_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息-优惠券结束时间',
	`pict_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息-商品主图',
	`click_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '链接-宝贝推广链接',
	`stock` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '拼团剩余库存',
	`sell_num` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '拼团已售数量',
	`total_stock` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '拼团库存数量',
	`oetime` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '拼团结束时间',
	`ostime` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '拼团开始时间',
	`jdd_num` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '拼团几人团',
	`jdd_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '拼团拼成价，单位元',
	`orig_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '拼团一人价（原价)，单位元',
	`level_one_category_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '一级类目名称',
	`level_one_category_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '一级类目ID',
	`category_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '叶子类目名称',
	`short_title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品短标题',
	`white_image` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品白底图',
	`word_list` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品关联词',
	`word` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品相关的关联词',
	`url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品相关关联词落地页地址',
	`tmall_play_activity_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '营销-天猫营销玩法',
	`uv_sum_pre_sale` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '预售数量',
	`new_user_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '新人价',
	`coupon_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息-优惠券满减信息',
	`coupon_share_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '链接-宝贝+券二合一页面链接',
	`nick` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺信息-卖家昵称',
	`reserve_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息-一口价',
	`ju_online_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '聚淘结束时间',
	`ju_online_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '聚淘开始时间',
	`maochao_play_free_post_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '当前是否包邮，1:是，0:否',
	`maochao_play_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '活动结束时间，精确到毫秒',
	`maochao_play_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '活动开始时间，精确到毫秒',
	`maochao_play_conditions` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '折扣条件，价格百分数存储，件数按数量存储。可以有多个折扣条件，与折扣字段对应，','分割',
	`maochao_play_discounts` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '折扣，折扣按照百分数存储，其余按照单位分存储。可以有多个折扣，','分割',
	`maochao_play_discount_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '玩法类型，2:折扣(满n件折扣),5:减钱(满n元减m元)',
	`multi_coupon_zk_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '多件券优惠比例',
	`price_after_multi_coupon` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '多件券件单价',
	`multi_coupon_item_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '多件券件数',
	`lock_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '锁住的佣金率',
	`lock_rate_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '锁佣结束时间',
	`lock_rate_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '锁佣开始时间',
	`presale_discount_fee_text` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠信息',
	`presale_tail_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付尾款结束时间（毫秒）',
	`presale_tail_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付尾款开始时间（毫秒）',
	`presale_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付定金结束时间（毫秒）',
	`presale_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付定金开始时间（毫秒）',
	`presale_deposit` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '定金（元）',
	`ysyl_tlj_send_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘礼金发放时间',
	`ysyl_click_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '推广链接',
	`ysyl_tlj_face` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '预估淘礼金（元）',
	`ysyl_commission_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '2030（表示20.3%）',
	`ysyl_tlj_use_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘礼金使用结束时间',
	`ysyl_tlj_use_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘礼金使用开始时间',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)物料精选[猜你喜欢]';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_gettkmaterialitem`
--

DROP TABLE IF EXISTS `fa_taoke_gettkmaterialitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_gettkmaterialitem` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`totalcount` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '搜索到符合条件的结果总数',
	`data` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品列表',
	`coupon_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券开始时间',
	`coupon_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券结束时间',
	`info_dxjh` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '定向计划信息',
	`tk_total_sales` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘客30天月推广量',
	`tk_total_commi` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '月支出佣金',
	`coupon_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券id',
	`num_iid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '宝贝id',
	`title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品标题',
	`pict_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品主图',
	`small_images` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品小图列表',
	`reserve_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品一口价格',
	`zk_final_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品折扣价格',
	`user_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '卖家类型',
	`provcity` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '宝贝所在地',
	`item_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品地址',
	`include_mkt` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否包含营销计划',
	`include_dxjh` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否包含定向计划',
	`commission_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '佣金比率',
	`volume` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '30天销量',
	`seller_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '卖家id',
	`coupon_total_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券总量',
	`coupon_remain_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券剩余量',
	`coupon_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息',
	`commission_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '佣金类型',
	`shop_title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺名称',
	`url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品淘客链接',
	`coupon_share_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '券二合一页面链接',
	`shop_dsr` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺dsr评分',
	`quanlimit` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券使用条件，如：满XX元使用',
	`youhuiquan` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券面额',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)全网淘客商品查询API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_gettbkshop`
--

DROP TABLE IF EXISTS `fa_taoke_gettbkshop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_gettbkshop` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '卖家ID',
	`shop_title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺名称',
	`shop_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺类型，B：天猫，C：淘宝',
	`seller_nick` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '卖家昵称',
	`pict_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店标图片',
	`shop_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺地址',
	`totalcount` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '搜索到符合条件的结果总数',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝客店铺查询API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_platform_getitemlist`
--

DROP TABLE IF EXISTS `fa_platform_getitemlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_platform_getitemlist` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`totalCount` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '总页数',
	`data` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '原始单条请求文本',
	`small_images` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品小图',
	`user_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺类型',
	`item_description` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品推荐语或描述',
	`coupon_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息',
	`item_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品链接',
	`commission_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '佣金比例',
	`coupon_total_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '总优惠券数量',
	`nick` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商家旺旺昵称',
	`zk_final_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '在售价',
	`quanhoujia` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '券后价',
	`shop_title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺名',
	`volume` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '销量',
	`coupon_remain_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券剩余数量',
	`coupon_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券开始时间',
	`coupon_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券结束时间',
	`seller_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '店铺ID',
	`title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品名',
	`num_iid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
	`yilingqu` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '已领取优惠券数量',
	`activeid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '优惠券ID',
	`youhuiquan` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券金额',
	`pict_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品主图',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘抢购/聚划算/9.9元淘客商品库 API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_doitemhighcommissionpromotionlink`
--

DROP TABLE IF EXISTS `fa_taoke_doitemhighcommissionpromotionlink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_doitemhighcommissionpromotionlink` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`category_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品分类ID',
	`coupon_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券有效期截止日期',
	`coupon_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息',
	`coupon_remain_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券剩余量',
	`coupon_total_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券总量',
	`coupon_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券开始时间',
	`coupon_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券类型',
	`has_coupon` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否有优惠券',
	`coupon_click_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '二合一链接',
	`item_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
	`max_commission_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '高佣金比例',
	`item_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品淘客链接',
	`tpwd` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令',
	`short_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '短链接',
	`youhuiquan` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券面额',
	`quanlimit` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券使用条件',
	`item_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息列表',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)高佣转链接API(商品ID)';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_doitemhighcommissionpromotionlinkbytpwd`
--

DROP TABLE IF EXISTS `fa_taoke_doitemhighcommissionpromotionlinkbytpwd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_doitemhighcommissionpromotionlinkbytpwd` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`short_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '短链接',
	`tpwd` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令',
	`item_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品淘客链接',
	`max_commission_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '高佣金比例',
	`item_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
	`coupon_click_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '二合一链接',
	`has_coupon` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否有优惠券',
	`coupon_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券类型',
	`coupon_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券开始时间',
	`coupon_total_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券总量',
	`coupon_remain_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券剩余量',
	`coupon_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息',
	`coupon_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券有效期截止日期',
	`category_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品分类ID',
	`youhuiquan` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券面额',
	`quanlimit` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券使用条件',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)高佣转链接API(淘口令)';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_sclicktoid`
--

DROP TABLE IF EXISTS `fa_taoke_sclicktoid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_sclicktoid` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`item_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
	`open_iid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品混淆ID',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)sclick链接解析api';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_doshopcovert`
--

DROP TABLE IF EXISTS `fa_taoke_doshopcovert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_doshopcovert` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`click_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '生成的店铺淘客链接',
	`user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '生成店铺淘客链接对应的店铺ID',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝客店铺转链API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_gettbkactivitylink`
--

DROP TABLE IF EXISTS `fa_taoke_gettbkactivitylink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_gettbkactivitylink` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘宝联盟官方活动推广URL',
	`tpwd` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝联盟官方活动推广API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_doitemhighcommissionpromotionlinkbyall`
--

DROP TABLE IF EXISTS `fa_taoke_doitemhighcommissionpromotionlinkbyall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_doitemhighcommissionpromotionlinkbyall` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`quanlimit` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券使用条件',
	`youhuiquan` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券面额',
	`short_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '短链接',
	`tpwd` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令',
	`item_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品淘客链接',
	`max_commission_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '高佣金比例',
	`item_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
	`coupon_click_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '二合一链接',
	`has_coupon` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否有优惠券',
	`coupon_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券类型',
	`coupon_start_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券开始时间',
	`coupon_total_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券总量',
	`coupon_remain_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券剩余量',
	`coupon_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券信息',
	`coupon_end_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券有效期截止日期',
	`category_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品分类ID',
	`item_info` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品信息',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)万能高佣转链API接口';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_gettbkactivityinfo`
--

DROP TABLE IF EXISTS `fa_taoke_gettbkactivityinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_gettbkactivityinfo` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`click_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '活动推广地址',
	`tpwd` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '活动推广地址对应的淘口令',
	`wx_qrcode_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '微信小程序推广二维码地址',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘客官方活动推广(更新版)';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_tbkorderdetailsget`
--

DROP TABLE IF EXISTS `fa_taoke_tbkorderdetailsget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_tbkorderdetailsget` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`list` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单列表',
	`tb_paid_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单在淘宝拍下付款的时间',
	`tk_paid_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单付款的时间',
	`pay_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '买家确认收货的付款金额（不包含运费金额）',
	`pub_share_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '结算预估收入=结算金额*提成',
	`trade_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '买家通过购物车购买的每个商品对应的订单编号，此订单编号并未在淘宝买家后台透出',
	`tk_order_role` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '二方：佣金收益的第一归属者； 三方：从其他淘宝客佣金中进行分成的推广者',
	`tk_earning_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单确认收货后且商家完成佣金支付的时间',
	`adzone_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '推广位管理下的推广位名称对应的ID，同时也是pid=mm_1_2_3中的“3”这段数字',
	`pub_share_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '从结算佣金中分得的收益比率',
	`refund_tag` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '维权标签，0 含义为非维权 1 含义为维权订单',
	`subsidy_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '平台给与的补贴比率，如天猫、淘宝、聚划算等',
	`tk_total_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '提成=收入比率*分成比率。指实际获得收益的比率',
	`item_category_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品所属的根类目，即一级类目的名称',
	`seller_nick` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '掌柜旺旺',
	`pub_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '推广者的会员id',
	`alimama_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '推广者赚取佣金后支付给阿里妈妈的技术服务费用的比率',
	`subsidy_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '平台出资方，如天猫、淘宝、或聚划算等',
	`item_img` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品图片',
	`pub_share_pre_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '付款预估收入=付款金额*提成。指买家付款金额为基数，预估您可能获得的收入。因买家退款等原因，可能与结算预估收入不一致',
	`alipay_total_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '买家拍下付款的金额（不包含运费金额）',
	`item_title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品标题',
	`site_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '媒体管理下的对应ID的自定义名称',
	`item_num` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品数量',
	`subsidy_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '补贴金额=结算金额*补贴比率',
	`alimama_share_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '技术服务费=结算金额*收入比率*技术服务费率。推广者赚取佣金后支付给阿里妈妈的技术服务费用',
	`trade_parent_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '买家在淘宝后台显示的订单编号',
	`order_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单所属平台类型，包括天猫、淘宝、聚划算等',
	`tk_create_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单创建的时间，该时间同步淘宝，可能会略晚于买家在淘宝的订单创建时间',
	`flow_source` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '产品类型',
	`terminal_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '成交平台',
	`click_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '通过推广链接达到商品、店铺详情页的点击时间',
	`tk_status` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单状态',
	`item_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品单价',
	`item_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
	`adzone_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '推广位管理下的自定义推广位名称',
	`total_commission_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '佣金比率',
	`item_link` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品链接',
	`site_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '媒体管理下的ID，同时也是pid=mm_1_2_3中的“2”这段数字',
	`seller_shop_title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺名称',
	`income_rate` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单结算的佣金比率+平台的补贴比率',
	`total_commission_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '佣金金额=结算金额*佣金比率',
	`tk_commission_pre_fee_for_media_` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '预估专项服务费',
	`tk_commission_fee_for_media_plat` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '结算专项服务费',
	`tk_commission_rate_for_media_pla` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '专项服务费率',
	`special_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员运营id',
	`relation_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '渠道关系id',
	`tk_deposit_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '预售时期，用户对预售商品支付定金的付款时间，可能略晚于在淘宝付定金时间',
	`tb_deposit_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '预售时期，用户对预售商品支付定金的付款时间',
	`deposit_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '预售时期，用户对预售商品支付的定金金额',
	`has_pre` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否还有上一页',
	`position_index` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '位点字段，由调用方原样传递',
	`has_next` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '是否还有下一页',
	`page_no` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '页码',
	`page_size` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '页大小',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝客订单查询API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_tbkrefundorderdetailsget`
--

DROP TABLE IF EXISTS `fa_taoke_tbkrefundorderdetailsget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_tbkrefundorderdetailsget` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`page_no` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '页码',
	`page_size` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '页大小',
	`total_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '总值',
	`list` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单列表',
	`tb_trade_parent_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '淘宝订单编号',
	`special_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员关系id',
	`relation_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '渠道关系id',
	`tk3rd_pub_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '第三方推广者memberid',
	`tk_pub_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '推广者memberid',
	`tk_subsidy_fee_refund3rd_pub` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '第三方应该返还的补贴',
	`tk_commission_fee_refund3rd_pub` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '第三方应该返还的佣金',
	`tk_subsidy_fee_refund_pub` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '第二方应该返还的补贴(不包括技术服务费)',
	`tk_commission_fee_refund_pub` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '第二方应该返还的佣金(不包括技术服务费)',
	`tk_refund_suit_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '维权完成时间',
	`tk_refund_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '维权创建时间',
	`earning_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单结算时间',
	`tb_trade_create_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单创建时间',
	`refund_status` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '维权状态',
	`tb_auction_title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '宝贝标题',
	`tb_trade_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '淘宝子订单编号',
	`refund_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '维权金额',
	`tb_trade_finish_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '结算金额',
	`tk_pub_show_return_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '应返商家金额(二方)',
	`tk3rd_pub_show_return_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '应返商家金额(三方)',
	`refund_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '1 表示2方，2表示3方',
	`alsc_pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '（口碑订单）口碑父订单号',
	`alsc_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '（口碑订单）口碑子订单号',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝客维权退款订单查询API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_getpunishorderlist`
--

DROP TABLE IF EXISTS `fa_taoke_getpunishorderlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_getpunishorderlist` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`results` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '处罚订单列表',
	`relation_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '渠道关系id',
	`settle_month` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '结算月份',
	`tk_trade_create_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘客订单创建时间',
	`punish_status` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '处罚状态',
	`violation_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '处罚类型',
	`tb_trade_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '子订单号',
	`tk_adzone_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'pid里的adzoneid',
	`tk_site_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'pid里的siteid',
	`tk_pub_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'pid里的pubid',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)处罚订单获取接口';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_tpwdtoid`
--

DROP TABLE IF EXISTS `fa_taoke_tpwdtoid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_tpwdtoid` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘口令解析商品ID API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_dotpwdcovert`
--

DROP TABLE IF EXISTS `fa_taoke_dotpwdcovert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_dotpwdcovert` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`click_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令对应的商品的淘客链接',
	`num_iid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '淘口令对应的商品的ID',
	`seller_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '店铺卖家ID',
	`origin_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '入参淘口令对应原始链接',
	`origin_pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '入参淘口令推广链接中的pid，如果不属于当前调用的推广者则展示“0”',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘口令解析&amp;转链';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_jiexitkl`
--

DROP TABLE IF EXISTS `fa_taoke_jiexitkl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_jiexitkl` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令链接',
	`title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令文字',
	`pic` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令打开后显示图片',
	`ownerid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '淘口令分享人ID',
	`youxiaoqi` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令剩余有效期',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘口令解析API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_createtaopwd`
--

DROP TABLE IF EXISTS `fa_taoke_createtaopwd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_createtaopwd` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘口令生成API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_tpwd_decrypt`
--

DROP TABLE IF EXISTS `fa_taoke_tpwd_decrypt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_tpwd_decrypt` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令链接',
	`title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令文字',
	`pic` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令打开后显示图片',
	`ownerid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '淘口令分享人ID',
	`youxiaoqi` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘口令剩余有效期',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘口令解析API(付费版)';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_gettbkpublisherinfo`
--

DROP TABLE IF EXISTS `fa_taoke_gettbkpublisherinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_gettbkpublisherinfo` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`root_pid_channel_list` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道专属pidList',
	`total_count` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '总记录数',
	`inviter_list` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道列表',
	`relation_app` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道备案 - 渠道推广的物料类型',
	`create_date` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道备案 - 备案日期',
	`account_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道备案 - 渠道昵称',
	`real_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道备案 - 渠道姓名',
	`relation_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '渠道备案 - 渠道关系ID',
	`offline_scene` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道备案 - 线下场景信息，1 - 门店，2- 学校，3 - 工厂，4 - 其他',
	`online_scene` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道备案 - 线上场景信息',
	`note` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '媒体侧渠道备注信息',
	`root_pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '渠道专属pid',
	`rtag` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '标识渠道原始身份信息',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝客渠道商信息查询API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_index_extapi_tbkrelationbeian`
--

DROP TABLE IF EXISTS `fa_index_extapi_tbkrelationbeian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_index_extapi_tbkrelationbeian` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`account_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道商用户名',
	`relation_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '渠道ID',
	`custompar` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '自定义输入串',
	`code` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '200',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='渠道商一键备案API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_getrelationoauthtpwd`
--

DROP TABLE IF EXISTS `fa_taoke_getrelationoauthtpwd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_getrelationoauthtpwd` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道链接授权',
	`tpwd` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道链接授权生成的口令',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构)新渠道商一键备案API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_getinvitecode`
--

DROP TABLE IF EXISTS `fa_taoke_getinvitecode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_getinvitecode` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝客邀请码生成API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_gettbkqdbeian`
--

DROP TABLE IF EXISTS `fa_taoke_gettbkqdbeian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_gettbkqdbeian` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`relation_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '渠道ID',
	`account_name` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '渠道昵称',
	`special_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '会员运营ID',
	`desc` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '绑定成功',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘宝客渠道信息备案API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_platform_getpaymentorderlist`
--

DROP TABLE IF EXISTS `fa_platform_getpaymentorderlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_platform_getpaymentorderlist` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`lists` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单列表',
	`_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '代付订单号',
	`alipay` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '支付宝账号',
	`money` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '打款金额',
	`create_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '打款时间戳（秒级）',
	`status` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单状态',
	`daifu_fee` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '代付手续费',
	`realname` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '支付宝账号对应的用户姓名',
	`beizhu` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '打款备注',
	`alipay_orderid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '支付宝流水号',
	`create_date` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '打款时间',
	`total_counts` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '10',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='代付订单查询API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_platform_getpaymentbalance`
--

DROP TABLE IF EXISTS `fa_platform_getpaymentbalance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_platform_getpaymentbalance` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)支付宝打款余额查询API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_op_api_v1_daifukuan_merchant`
--

DROP TABLE IF EXISTS `fa_op_api_v1_daifukuan_merchant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_op_api_v1_daifukuan_merchant` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`alipay_orderid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '支付宝流水号',
	`orderid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '开放平台订单ID',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='[商户版]转帐到支付宝帐户(在线打款)API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_gettbauthlist`
--

DROP TABLE IF EXISTS `fa_taoke_gettbauthlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_gettbauthlist` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`tbname` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘宝用户名',
	`auth_expire_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '授权过期时间（时间戳）',
	`auth_expire_date` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '授权过期日期（日期）',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)获取授权淘客帐号列表';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_createtaoshorturl`
--

DROP TABLE IF EXISTS `fa_taoke_createtaoshorturl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_createtaoshorturl` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`short_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '生成的短链接',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)生成淘宝短链接API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_platform_getquancontent`
--

DROP TABLE IF EXISTS `fa_platform_getquancontent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_platform_getquancontent` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`username` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '小编姓名',
	`created_time` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '发圈时间',
	`quan_content` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '发圈内容',
	`userpic` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '发圈人头像',
	`goods_list` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '发圈商品列表',
	`num_iid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品ID',
	`zk_final_price` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品在售价',
	`quanhoujia` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '券后价',
	`user_type` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '店铺类型',
	`volume` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '销量',
	`title` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品标题',
	`youhuiquan` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '优惠券金额',
	`pict_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品主图',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)发圈(朋友圈)内容API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_op_api_v1_getproxyip`
--

DROP TABLE IF EXISTS `fa_op_api_v1_getproxyip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_op_api_v1_getproxyip` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`protocol` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '协议',
	`area` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '地区',
	`types` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '0: 高匿,1:匿名,2 透明',
	`ip` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'ip地址',
	`speed` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '系统测试速度',
	`port` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '端口',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='代理IP';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_taoke_create_taolijin`
--

DROP TABLE IF EXISTS `fa_taoke_create_taolijin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_taoke_create_taolijin` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`rights_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '淘礼金ID',
	`send_url` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '淘礼金领取URL',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='(重构版)淘礼金创建 API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_op_api_v1_titlefc`
--

DROP TABLE IF EXISTS `fa_op_api_v1_titlefc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_op_api_v1_titlefc` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`text` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '原始单条请求文本',
	`items` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '词汇数组，每个元素对应结果中的一个词',
	`item` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '词汇的字符串',
	`basic_words` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '基本词成分',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='淘宝标题分词 API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_api_platform_iptolocation`
--

DROP TABLE IF EXISTS `fa_api_platform_iptolocation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_api_platform_iptolocation` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`ip` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '查询的IP地址',
	`country` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '地区',
	`area` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '区域/运营商',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='IP地址查询API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_op_api_v1_weixinurlcheck`
--

DROP TABLE IF EXISTS `fa_op_api_v1_weixinurlcheck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_op_api_v1_weixinurlcheck` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`code` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '200为正常域名',
	`msg` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '检测结果',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='微信封禁域名检测 API';
/*!40101 SET character_set_client = @saved_cs_client */;

--

-- Table structure for table `fa_platform_expressquery`
--

DROP TABLE IF EXISTS `fa_platform_expressquery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fa_platform_expressquery` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
	`cpCompanyInfo` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '快递信息',
	`packageStatus` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '快递状态',
	`transitList` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '快递跟踪记录',
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='快递查询';
/*!40101 SET character_set_client = @saved_cs_client */;

