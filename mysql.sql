#
# Table structure for table 'administration'
#

CREATE TABLE `administration` (
  `admin_id` int(11) unsigned NOT NULL auto_increment,
  `firstname` varchar(100) default NULL,
  `lastname` varchar(100) default NULL,
  `login` varchar(100) NOT NULL default '',
  `passwd` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`admin_id`)
) TYPE=MyISAM;



#
# Dumping data for table 'administration'
#


