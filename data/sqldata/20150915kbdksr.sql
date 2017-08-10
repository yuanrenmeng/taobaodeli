-- ecshop v2.x SQL Dump Program
-- http://fm5785915c.sx4.topnic.net
-- 
-- DATE : 2015-09-15 15:20:15
-- MYSQL SERVER VERSION : 5.1.57-community
-- PHP VERSION : 5.2.17
-- ECShop VERSION : v2.7.3
-- Vol : 1
DROP TABLE IF EXISTS `ecs_user_account`;
CREATE TABLE `ecs_user_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('2', '144', 'admin', '-25.20', '1435993764', '1436115931', '审核通过，提现金将在三个工作日内转入您的绑定支付宝', '1', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('6', '78', 'admin', '-36.00', '1436383184', '1436383210', '申请通过', '18249946699', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('5', '11', 'admin', '-34.20', '1436382835', '1436382971', '审核通过', '15677167988', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('8', '11', 'admin', '-27.00', '1436472586', '1436472686', '审核通过', '15677167988', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('9', '23', 'admin', '-3.50', '1436482876', '1436809484', '审核通过，返利金将在3个工作日内返还到您的支付宝', '15296541375', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('10', '35', 'admin', '-76.50', '1436927953', '1436981420', '审核通过，返利金将在3天内转到您的支付宝', '支付宝账户13481070451', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('11', '75', 'admin', '-17.10', '1437005568', '1437066738', '审核通过 返利将在3个工作日内转入您的支付宝，您还未绑定姓名请尽快绑定', '18277185872', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('12', '278', 'admin', '-25.20', '1437525367', '1438123416', '审核通过，返利金将在3个工作日内转到您的支付宝', '支付宝', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('13', '107', 'admin', '-42.50', '1437787815', '1438123544', '申请通过，返利金将在3个工作日内转到您的支付宝', '18277187813', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('14', '186', 'admin', '-31.76', '1438109122', '1438123722', '审核通过，返利金将在3个工作日内转到您的支付宝', '15577177586', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('15', '278', 'admin', '-25.20', '1438194311', '1438209143', '审核通过，提现金额将在3个工作日内转到您的支付宝', '支付宝', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('16', '329', 'admin', '-43.20', '1438392684', '1438536378', '审核通过，返利金将在3个工作日内转到您的支付宝', 'dolly8@163.com', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('17', '83', 'admin', '-20.00', '1438566300', '1438640369', '审核通过 提现金将才3个工作日内转到您的支付宝', '18277187813', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('18', '229', 'admin', '-31.50', '1438885153', '1439145797', '审核通过，提现金将在3个工作日内转到您的支付宝', 'fangcaomi@qq.com', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('19', '186', 'admin', '-43.00', '1439321573', '1439420395', '审核通过，提现金将在3个工作日内转到您的账户', '15577177586', '1', '', '1');
INSERT INTO `ecs_user_account` ( `id`, `user_id`, `admin_user`, `amount`, `add_time`, `paid_time`, `admin_note`, `user_note`, `process_type`, `payment`, `is_paid` ) VALUES  ('20', '75', 'admin', '-18.00', '1439424535', '1439429408', '审核通过，提现金将在3个工作日内转到您的账户，您还未绑定姓名，待核实后才可以转，请绑定您的姓名', '18277185872', '1', '', '1');
-- END ecshop v2.x SQL Dump Program 