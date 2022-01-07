USE Hocoyon;
CREATE TABLE form(
	id INT PRIMARY KEY AUTO_INCREMENT,
	fname VARCHAR(50) NOT NULL,
	sname VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	subject VARCHAR(50) NOT NULL,
	message VARCHAR(500) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE resource(
	id INT PRIMARY KEY AUTO_INCREMENT,
	fname VARCHAR(50) NOT NULL,
	sname VARCHAR(50) NOT NULL,
	phone INT(20) NOT NULL,
	location VARCHAR(500) NOT NULL,
	tshirt INT(200),
	umbrella INT(200),
	cap INT(200)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;