-- ecshop v2.x SQL Dump Program
-- http://fm5785915c.sx4.topnic.net
-- 
-- DATE : 2015-09-15 14:25:16
-- MYSQL SERVER VERSION : 5.1.57-community
-- PHP VERSION : 5.2.17
-- ECShop VERSION : v2.7.3
-- Vol : 1
DROP TABLE IF EXISTS `ecs_order_action`;
CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('30', '370', 'admin', '1', '0', '2', '0', '通过', '1436123092');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('19', '109', 'admin', '1', '0', '0', '0', '', '1435279373');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('20', '124', 'admin', '1', '0', '0', '0', '', '1435279436');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('21', '62', 'admin', '1', '0', '0', '0', '', '1435279483');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('22', '62', 'admin', '1', '0', '2', '0', '已确认收货', '1435280481');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('23', '228', 'admin', '1', '0', '0', '0', '', '1435280906');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('24', '238', 'admin', '1', '0', '0', '0', '', '1435356457');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('25', '281', 'admin', '1', '0', '0', '0', '', '1435512640');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('27', '370', 'admin', '1', '0', '0', '0', '', '1435775453');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('28', '369', 'admin', '1', '0', '0', '0', '', '1435775463');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('29', '368', 'admin', '1', '0', '0', '0', '', '1435775475');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('31', '416', 'admin', '1', '0', '0', '0', '', '1436143466');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('32', '417', 'admin', '1', '0', '0', '0', '', '1436145336');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('33', '418', 'admin', '1', '0', '0', '0', '', '1436206702');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('34', '419', 'admin', '1', '0', '0', '0', '', '1436206895');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('35', '124', 'admin', '1', '0', '2', '0', '已返利', '1436375486');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('36', '109', 'admin', '1', '0', '2', '0', '已返利', '1436375631');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('37', '418', 'admin', '1', '0', '2', '0', '返利完成', '1436382915');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('38', '495', 'admin', '1', '0', '0', '0', '', '1436383402');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('39', '558', 'admin', '1', '0', '0', '0', '', '1436492814');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('40', '559', 'admin', '1', '0', '0', '0', '', '1436560261');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('41', '560', 'admin', '1', '0', '0', '0', '', '1436561226');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('42', '561', 'admin', '1', '0', '0', '0', '', '1436568742');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('43', '562', 'admin', '1', '0', '0', '0', '', '1436739046');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('44', '558', 'admin', '1', '0', '2', '0', '已返利', '1436919099');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('45', '495', 'admin', '1', '0', '2', '0', '已返利', '1436919252');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('46', '419', 'admin', '1', '0', '2', '0', '已返利', '1436919283');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('47', '369', 'admin', '1', '0', '2', '0', '已返利', '1436919428');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('48', '368', 'admin', '1', '0', '2', '0', '已返利', '1436919555');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('49', '238', 'admin', '1', '0', '2', '0', '已返利', '1436919748');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('50', '228', 'admin', '1', '0', '2', '0', '已返利', '1436919792');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('51', '281', 'admin', '1', '0', '2', '0', '已返利', '1436919929');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('52', '416', 'admin', '1', '0', '2', '0', '已返利', '1436919986');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('53', '561', 'admin', '1', '0', '2', '0', '已返利', '1436927720');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('54', '560', 'admin', '1', '0', '2', '0', '已返利', '1436927749');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('55', '559', 'admin', '1', '0', '2', '0', '已返利', '1436927775');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('76', '777', 'admin', '1', '0', '2', '0', '已返利', '1439319193');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('57', '564', 'admin', '1', '0', '0', '0', '', '1436984951');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('58', '565', 'admin', '1', '0', '0', '0', '', '1436999162');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('59', '566', 'admin', '1', '0', '0', '0', '', '1437074319');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('60', '567', 'admin', '1', '0', '0', '0', '', '1437092722');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('61', '417', 'admin', '1', '0', '2', '0', '已返利', '1437332489');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('62', '562', 'admin', '1', '0', '2', '0', '已返利', '1437332751');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('63', '691', 'admin', '1', '0', '0', '0', '', '1437430731');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('64', '691', 'admin', '1', '0', '2', '0', '已返利', '1437762702');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('65', '776', 'admin', '1', '0', '0', '0', '', '1437930438');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('66', '777', 'admin', '1', '0', '0', '0', '', '1438124774');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('67', '779', 'admin', '1', '0', '0', '0', '', '1438217489');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('68', '565', 'admin', '1', '0', '2', '0', '返利完成', '1438365253');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('69', '564', 'admin', '1', '0', '2', '0', '返利完成', '1438365337');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('70', '782', 'admin', '1', '0', '0', '0', '', '1438534845');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('71', '566', 'admin', '1', '0', '2', '0', '已返利', '1438535206');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('72', '776', 'admin', '1', '0', '2', '0', '已返利', '1438535572');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('73', '567', 'admin', '1', '0', '2', '0', '已返利', '1438535605');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('75', '784', 'admin', '1', '0', '0', '0', '', '1439318950');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('77', '779', 'admin', '1', '0', '2', '0', '已返利', '1439319412');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('78', '783', 'admin', '1', '0', '0', '0', '', '1439320704');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('85', '788', 'admin', '1', '0', '0', '0', '', '1439503862');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('84', '787', 'admin', '1', '0', '2', '0', '333', '1439426492');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('83', '787', 'admin', '1', '0', '0', '0', '', '1439425848');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('86', '788', 'admin', '1', '0', '2', '0', '手提包单肩斜挎包小香风小包包迷你', '1439505003');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('87', '788', 'admin', '1', '0', '0', '0', '1', '1439505535');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('88', '789', 'admin', '1', '0', '0', '0', '', '1439505898');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('89', '782', 'admin', '1', '0', '2', '0', '已返利', '1439508807');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('90', '790', 'admin', '1', '0', '0', '0', '', '1439848904');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('91', '801', 'admin', '1', '0', '0', '0', '', '1440092394');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('92', '789', 'admin', '1', '0', '2', '0', '天鹅绒连裤丝袜女20D防脱丝  奖金4元', '1440094119');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('93', '789', 'admin', '1', '0', '0', '0', '0', '1440094201');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('94', '789', 'admin', '1', '0', '2', '0', '已返利', '1440094234');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('95', '802', 'admin', '1', '0', '0', '0', '', '1440178060');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('96', '803', 'admin', '1', '0', '0', '0', '', '1440524780');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('97', '804', 'admin', '1', '0', '0', '0', '', '1440610033');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('98', '784', 'admin', '1', '0', '2', '0', '已返利', '1440611578');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('99', '783', 'admin', '1', '0', '2', '0', '已返利', '1440612996');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('100', '805', 'admin', '1', '0', '0', '0', '', '1440703057');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('101', '788', 'admin', '1', '0', '2', '0', '已返利', '1440784344');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('102', '790', 'admin', '1', '0', '2', '0', '已返利', '1441128949');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('103', '806', 'admin', '1', '0', '0', '0', '', '1441473491');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('104', '807', 'admin', '1', '0', '0', '0', '', '1441474608');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('105', '801', 'admin', '1', '0', '2', '0', '已返利', '1441475829');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('106', '802', 'admin', '1', '0', '2', '0', '已返利', '1441476721');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('107', '803', 'admin', '1', '0', '2', '0', '已返利', '1441819616');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('108', '804', 'admin', '1', '0', '2', '0', '已返利', '1441819820');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('109', '808', 'admin', '1', '0', '0', '0', '', '1441847387');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('110', '809', 'admin', '1', '0', '0', '0', '', '1441847889');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('111', '810', 'admin', '1', '0', '0', '0', '', '1441905147');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('112', '811', 'admin', '1', '0', '0', '0', '', '1441905397');
INSERT INTO `ecs_order_action` ( `action_id`, `order_id`, `action_user`, `order_status`, `shipping_status`, `pay_status`, `action_place`, `action_note`, `log_time` ) VALUES  ('113', '805', 'admin', '1', '0', '2', '0', '已返利', '1441991692');
DROP TABLE IF EXISTS `ecs_role`;
CREATE TABLE `ecs_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `role_describe` text,
  PRIMARY KEY (`role_id`),
  KEY `user_name` (`role_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_role` ( `role_id`, `role_name`, `action_list`, `role_describe` ) VALUES  ('1', '上传活动商品管理员', 'goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,goods_type,goods_auto,suppliers_manage', '上传活动商品管理员 ');
INSERT INTO `ecs_role` ( `role_id`, `role_name`, `action_list`, `role_describe` ) VALUES  ('2', '返利申请审核管理员', 'feedback_priv,integrate_users,sync_users,users_manage,users_drop,user_rank,surplus_manage,account_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view', '返利申请审核管理员');
INSERT INTO `ecs_role` ( `role_id`, `role_name`, `action_list`, `role_describe` ) VALUES  ('3', '文章信息发布管理员账号', 'article_cat,article_manage,shopinfo_manage,shophelp_manage,vote_priv,article_auto', '文章信息发布管理员账号');
INSERT INTO `ecs_role` ( `role_id`, `role_name`, `action_list`, `role_describe` ) VALUES  ('4', '提现', 'feedback_priv,integrate_users,sync_users,users_manage,users_drop,user_rank,surplus_manage,account_manage', '地方撒');
INSERT INTO `ecs_role` ( `role_id`, `role_name`, `action_list`, `role_describe` ) VALUES  ('5', '超级管理员备份', 'goods_manage,remove_back,cat_manage,cat_drop,attr_manage,brand_manage,comment_priv,tag_manage,goods_type,goods_auto,virualcard,picture_batch,goods_export,goods_batch,gen_goods_script,article_cat,article_manage,shopinfo_manage,shophelp_manage,vote_priv,article_auto,feedback_priv,integrate_users,sync_users,users_manage,users_drop,user_rank,surplus_manage,account_manage,template_manage,admin_manage,admin_drop,allot_priv,logs_manage,logs_drop,agency_manage,suppliers_manage,role_manage,shop_config,ship_manage,payment,shiparea_manage,area_manage,friendlink,db_backup,db_renew,flash_manage,navigator,cron,affiliate,affiliate_ck,sitemap,file_priv,file_check,reg_fields,shop_authorized,webcollect_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,topic_manage,snatch_manage,ad_manage,gift_manage,card_manage,pack,bonus_manage,auction,group_by,favourable,whole_sale,package_manage,exchange_goods,attention_list,email_list,magazine_list,view_sendlist,template_select,template_setup,library_manage,lang_edit,backup_setting,mail_template,db_backup,db_renew,db_optimize,sql_query,convert,sms_send', '超级管理员备份');
-- END ecshop v2.x SQL Dump Program 