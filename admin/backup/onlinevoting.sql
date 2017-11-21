DROP TABLE admin;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("2","hsama","786");



DROP TABLE candidates;

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `party` varchar(100) NOT NULL,
  `votes` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO candidates VALUES("37","jawid","President","fsu","1","ID.png","ISA");
INSERT INTO candidates VALUES("38","khaled","Senator","FKP","3","13578475_913587055453995_549588168_n(1)(1).jpg","Communication");
INSERT INTO candidates VALUES("39","fakhria","President","FKP","3","2.jpg","Communication");
INSERT INTO candidates VALUES("40","abdullah","Senator","FST","1","14794108_935994083211280_1709591545_n.jpg","ISA");
INSERT INTO candidates VALUES("41","Dr Nurlida Basir","Lecturer","FST","3","1132433.jpg","ISA");
INSERT INTO candidates VALUES("42","omid","Secretary","fsu","1","14641991_318530848503403_4832115420906927709_n.jpg","ISA");



DROP TABLE course;

CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("6","ISA");
INSERT INTO course VALUES("7","Communication");



DROP TABLE list_stu_num;

CREATE TABLE `list_stu_num` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO list_stu_num VALUES("7","1132432","used","Pass, khaled Kon","ISA");
INSERT INTO list_stu_num VALUES("8","1132425","used","jan, asad Sharifi","ISA777");
INSERT INTO list_stu_num VALUES("9","1132433","used","jan, Ahmad ","ISA");
INSERT INTO list_stu_num VALUES("10","1132424","used","ahmadi, Iron ","ISA");



DROP TABLE party;

CREATE TABLE `party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO party VALUES("4","FST","FST VOTING");
INSERT INTO party VALUES("6","fsu","new");
INSERT INTO party VALUES("7","FKP","FKP");



DROP TABLE position;

CREATE TABLE `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO position VALUES("10","President");
INSERT INTO position VALUES("12","Senator");
INSERT INTO position VALUES("13","Lecturer");
INSERT INTO position VALUES("14","Secretary");



DROP TABLE students;

CREATE TABLE `students` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11322445 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("11","1132432","","","","ISA","12","what is your favorite color","yellow","voted");
INSERT INTO students VALUES("12","1132425","","","","ISA","122","what is your favorite color","blue","voted");
INSERT INTO students VALUES("13","1132424","","","","ISA","133","what is your favorite color","bloa","voted");
INSERT INTO students VALUES("1122","kkk","kk@yahoo.com","","FST","ISA","111","what is your favorite color","red","voted");
INSERT INTO students VALUES("1132401","hayat","test@gmail.com","878789","ISA","ISA","786","what is your favorite movie","xxx","voted");
INSERT INTO students VALUES("1132415","wasi","khaledahmadi556@yahoo.com","878789","FST","ISA","222","what is your favorite color","black","voted");
INSERT INTO students VALUES("1132417","husam","aaa@ggg.com","0877664633243","FST","ISA","12345","what is your favorite color","red","voted");
INSERT INTO students VALUES("1132418","ajash","asadullah@yahoo.com","9034857","FST","ISA","777","what is your favorite movie","ted2","voted");
INSERT INTO students VALUES("1132420","fakhria","khaledahmadi556@yahoo.com","7676678","FST","ISA","123","what is your favorite color","green","voted");
INSERT INTO students VALUES("1132438","doghom","khaledahmadi556@yahoo.com","76868","ISA","ISA","999","what is your favorite color","red","voted");
INSERT INTO students VALUES("11322444","113","rostam@yahoo.com","999989","ISA","ISA","123","what is your favorite movie","Y3F3Y","voted");



DROP TABLE votedetails;

CREATE TABLE `votedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate` varchar(100) NOT NULL,
  `voters` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

INSERT INTO votedetails VALUES("64","fakhria","1132417");
INSERT INTO votedetails VALUES("65","khaled","1132417");
INSERT INTO votedetails VALUES("66","Dr Nurlida Basir","1132417");
INSERT INTO votedetails VALUES("67","fakhria","1132415");
INSERT INTO votedetails VALUES("68","khaled","1132415");
INSERT INTO votedetails VALUES("69","Dr Nurlida Basir","1132415");
INSERT INTO votedetails VALUES("70","jawid","1132438");
INSERT INTO votedetails VALUES("71","abdullah","1132438");
INSERT INTO votedetails VALUES("72","Dr Nurlida Basir","1132438");
INSERT INTO votedetails VALUES("73","omid","1132438");



