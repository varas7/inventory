CREATE TABLE product (
	product_id int NOT NULL AUTO_INCREMENT,
	product_name varchar(50) NOT NULL,
	category varchar(20) NOT NULL,
	qty int NOT NULL,
	cp int NOT NULL,
	sp int NOT NULL,
	exp_date date NOT NULL,
	buy_ts timestamp NOT NULL,
	PRIMARY KEY(product_id, product_name, cp, exp_date)
);

CREATE TABLE roles (
    username varchar(15),
    password varchar(32),
    role varchar(15)
);

CREATE TABLE mfg_company (
	product_name varchar(50) references product(product_name),
	company varchar(50) NOT NULL,
	PRIMARY KEY(product_name, company)
);

CREATE TABLE category (
	product_name varchar(50) references product(product_name),
	category varchar(50) NOT NULL,
	PRIMARY KEY(product_name, category)
);

CREATE TABLE transaction (
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	txn_timestamp timestamp NOT NULL,
	txn_type char(1) NOT NULL
);

CREATE TABLE person (
	pid int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name varchar(60) NOT NULL,
	username varchar(20) NOT NULL,
	address text NOT NULL,
	contact_no int NOT NULL,
	role char(10)
);

CREATE TABLE txn_on (
	product_name varchar(60) NOT NULL,
	txn_timestamp timestamp NOT NULL,
	expiry_date date NOT NULL,
	cp int NOT NULL,
	id int NOT NULL,
	qty_buy_sell int NOT NULL,
	txn_type char(1) NOT NULL,
	PRIMARY KEY(product_name, txn_timestamp, expiry_date, cp,
	id),
	FOREIGN KEY(id) REFERENCES transaction(id)
);

CREATE TABLE txn_person (
	id int NOT NULL,
	pid_person int NOT NULL,
	PRIMARY KEY(id, pid_person),
	FOREIGN KEY(id) REFERENCES transaction(id)
);