SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


CREATE TABLE IF NOT EXISTS `usr` (
	`f_name` varchar(200) NOT NULL ,
	`l_name` varchar(200) NOT NULL ,
	`username` varchar(200) NOT NULL ,
	`email` varchar(200) NOT NULL ,
	`password` varchar(200) NOT NULL ,
	
	
	
	PRIMARY KEY (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

INSERT INTO `usr` (`f_name` ,`l_name` ,`username` ,`email`,`password`) VALUES
('subodh' , 'adhikari' , 'asubodh' ,'a@gmail.com','123'),
('aaa' , 'bbbb' , 'cccc' ,'d@gmail.com','321');
