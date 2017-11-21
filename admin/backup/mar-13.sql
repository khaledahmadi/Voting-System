DROP TABLE admin;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("1","admin","admin");



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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO candidates VALUES("1","Argie Policarpio","President","LAKAS","10","ownerpic.png","");
INSERT INTO candidates VALUES("2","Febe Tabar","President","LAKAS","5","wire_transfer_256.png","");
INSERT INTO candidates VALUES("3","Amy Serviano","Vice-President","LAKAS","14","wire_transfer_256.png","");
INSERT INTO candidates VALUES("4","Mary Jane Serviano","Vice-President","LAKAS","1","wire_transfer_256.png","");
INSERT INTO candidates VALUES("5","Carlo Mesa","Secretary","LAKAS","13","wire_transfer_256.png","");
INSERT INTO candidates VALUES("6","Jano Gibs","Secretary","LAKAS","2","wire_transfer_256.png","");
INSERT INTO candidates VALUES("7","Liezel Barabas","Treasurer","LAKAS","13","wire_transfer_256.png","");
INSERT INTO candidates VALUES("8","Jemar Agi","Treasurer","LAKAS","2","wire_transfer_256.png","");
INSERT INTO candidates VALUES("9","Mirrian Santiago","Senator","LAKAS","17","wire_transfer_256.png","");
INSERT INTO candidates VALUES("10","Bong Revilla","Senator","LAKAS","5","wire_transfer_256.png","");
INSERT INTO candidates VALUES("11","@lbee Binitez","Representative","LAKAS","4","wire_transfer_256.png","BSHM");
INSERT INTO candidates VALUES("12","Kako Lacson","Representative","LAKAS","7","wire_transfer_256.png","BSCS");
INSERT INTO candidates VALUES("13","ouiuiu","Senator","LAKAS","7","","");
INSERT INTO candidates VALUES("14","iuiui","Senator","LAKAS","6","","");
INSERT INTO candidates VALUES("15","uyuyu","Senator","LAKAS","5","","");
INSERT INTO candidates VALUES("16","wapak","Senator","LAKAS","5","","");
INSERT INTO candidates VALUES("17","kjkjkjk","Senator","LAKAS","5","","");
INSERT INTO candidates VALUES("18","mlkjlkl","Senator","LAKAS","4","","");
INSERT INTO candidates VALUES("19","klkl","Senator","LAKAS","5","","");
INSERT INTO candidates VALUES("20","cfcc","Senator","LAKAS","5","","");
INSERT INTO candidates VALUES("21","hbh","Senator","LAKAS","5","","");
INSERT INTO candidates VALUES("22","aple","Senator","LAKAS","5","","");
INSERT INTO candidates VALUES("23","lk,lkl","Senator","LAKAS","3","","");
INSERT INTO candidates VALUES("24","llplpl","Senator","LAKAS","2","","");
INSERT INTO candidates VALUES("25",";l;l;","Senator","LAKAS","0","","");
INSERT INTO candidates VALUES("26","uhyuyh","Senator","LAKAS","0","","");
INSERT INTO candidates VALUES("27","mnmn","Senator","LAKAS","0","","");
INSERT INTO candidates VALUES("28","Baliling Demagiba","Representative","LAKAS","4","","BSIT");
INSERT INTO candidates VALUES("29","iuiu","Auditor","LAKAS","10","wire_transfer_256.png","None");
INSERT INTO candidates VALUES("30","mn mnmn","PRO","LAKAS","10","wire_transfer_256.png","None");
INSERT INTO candidates VALUES("31","kluiu","Business-Manager","LAKAS","9","wire_transfer_256.png","None");



DROP TABLE course;

CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("1","BSCS");
INSERT INTO course VALUES("2","BSIT");
INSERT INTO course VALUES("3","BSHM");
INSERT INTO course VALUES("4","BSCE");
INSERT INTO course VALUES("5","BSCrim");



DROP TABLE list_stu_num;

CREATE TABLE `list_stu_num` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO list_stu_num VALUES("1","C-08769-12","used","","");
INSERT INTO list_stu_num VALUES("2","C-08769-13","used","","");
INSERT INTO list_stu_num VALUES("3","C-08769-14","used","","");
INSERT INTO list_stu_num VALUES("4","C-08769-15","used","Policarpio,  Febe T","BSIT");



DROP TABLE party;

CREATE TABLE `party` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO party VALUES("2","LAKAS","Malakas Pala");



DROP TABLE position;

CREATE TABLE `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO position VALUES("1","President");
INSERT INTO position VALUES("2","Vice-President");
INSERT INTO position VALUES("3","Secretary");
INSERT INTO position VALUES("4","Treasurer");
INSERT INTO position VALUES("5","Auditor");
INSERT INTO position VALUES("6","PRO");
INSERT INTO position VALUES("7","Business-Manager");
INSERT INTO position VALUES("8","Senator");
INSERT INTO position VALUES("9","Representative");



DROP TABLE students;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("1","Argie Policarpio","BSIT","argie","argie","notvoted");
INSERT INTO students VALUES("3","Amy Serviano","BSHM","C-08769-13","amy","voted");
INSERT INTO students VALUES("4","Argie Policarpio","BSCS","C-08769-12","argie","voted");
INSERT INTO students VALUES("5","Tammie","BSCS","C-08769-14","argie","voted");
INSERT INTO students VALUES("6","Policarpio,  Febe T","BSIT","C-08769-15","argie","voted");



DROP TABLE votedetails;

CREATE TABLE `votedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate` varchar(100) NOT NULL,
  `voters` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO votedetails VALUES("1","Argie Policarpio","C-08769-15");
INSERT INTO votedetails VALUES("2","Amy Serviano","C-08769-15");
INSERT INTO votedetails VALUES("3","Carlo Mesa","C-08769-15");
INSERT INTO votedetails VALUES("4","Liezel Barabas","C-08769-15");
INSERT INTO votedetails VALUES("5","iuiu","C-08769-15");
INSERT INTO votedetails VALUES("6","mn mnmn","C-08769-15");
INSERT INTO votedetails VALUES("7","kluiu","C-08769-15");
INSERT INTO votedetails VALUES("8","Mirrian Santiago","C-08769-15");
INSERT INTO votedetails VALUES("9","Bong Revilla","C-08769-15");
INSERT INTO votedetails VALUES("10","Baliling Demagiba","C-08769-15");



