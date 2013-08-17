-- -------- SCHEMA --------

-- -------- STRUCTURE --------

DROP TABLE IF EXISTS user;

CREATE TABLE user(
	id int(11) not null auto_increment primary key,
	username not null unique,
	password not null
);

-- -------- DATA --------

INSERT INTO user VALUES(null, 'ac', 'ac');