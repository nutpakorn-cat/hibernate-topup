<?php
$this->db->query("CREATE TABLE IF NOT EXISTS `tb_point` (
  `point_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `point_price` int(11) NOT NULL,
  `point_point` int(11) NOT NULL,
  PRIMARY KEY (`point_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;");
$this->db->query("CREATE TABLE IF NOT EXISTS `tb_topup` (
  `topup_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topup_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `topup_point` int(11) NOT NULL,
  `topup_date` datetime NOT NULL,
  PRIMARY KEY (`topup_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;");
$this->db->query("CREATE TABLE IF NOT EXISTS `tb_topup_setting` (
  `setting_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topup_uid` int(11) NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;");
$this->db->query("INSERT IGNORE INTO `tb_topup_setting` (`setting_id`, `topup_uid`) VALUES
(1, 99999);
");
$this->db->query("INSERT IGNORE INTO `tb_point` (`point_id`, `point_price`, `point_point`) VALUES
(1, 50, 500),
(2, 90, 900),
(3, 150, 1500),
(4, 300, 3000),
(5, 500, 5000),
(6, 1000, 10000);");
$info_controller = array("clear.php","edit.php");
$info_view = array("topup.php","history.php","admin.php");
$info_model = array();
$info_helper = array();
$query_all = array(
    "panel_left" => "\$this->load->view('hbn_topup/topup');",
    "panel_right" => "",
    "panel_left_admin" => "\$this->load->view('hbn_topup/admin');",
    "panel_right_admin" => "",
    "btn" => "",
    "info" => "",
    "info_admin" => "",
    "edit_user" => "\$this->load->view('hbn_topup/history');"
);
