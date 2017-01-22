CREATE TABLE posts(
	ID int NOT NULL AUTO_INCREMENT,
	post varchar(222) NOT NULL,
	genere varchar(10) NOT NULL,
	tme varchar(255) NOT NULL,
	dte varchar(255) NOT NULL,
	cmts varchar(500),
	PRIMARY KEY (ID)
);
