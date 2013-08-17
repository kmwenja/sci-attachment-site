-- -------- SCHEMA --------

-- -------- STRUCTURE --------

DROP TABLE IF EXISTS user;

CREATE TABLE user(
	id int(11) not null auto_increment primary key,
	username varchar(200) not null unique,
	password varchar(200) not null,
	name varchar(200) not null
);

-- -------- DATA --------

INSERT INTO user VALUES(null, 'ac', 'ac', 'Lawrence Muchemi');