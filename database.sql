CREATE TABLE tb_golongan (
	gol_id TINYINT(3) NOT NULL AUTO_INCREMENT,
	gol_kode VARCHAR(10) NOT NULL,
	gol_nama VARCHAR(50) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(gol_id)
);

CREATE TABLE tb_user (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	user_nama VARCHAR(100) NOT NULL,
	user_alamat TEXT NOT NULL,
	user_hp VARCHAR(25) NOT NULL,
	user_pos VARCHAR(5) NOT NULL,
	user_role TINYINT(2) NOT NULL,
	user_aktif TINYINT(2) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_email)
);

CREATE TABLE tb_pelanggan (
	pel_id INT(11) NOT NULL AUTO_INCREMENT,
	gol_id TINYINT(3) NOT NULL,
	pel_no VARCHAR(20) NOT NULL,
	pel_nama VARCHAR(50) NOT NULL,
	pel_alamat TEXT NOT NULL,
	pel_hp VARCHAR(20) NOT NULL,
	pel_ktp VARCHAR(50) NOT NULL,
	pel_seri VARCHAR(50) NOT NULL,
	pel_meteran INT(11) NOT NULL,
	pel_aktif enum('Y','N'),
	user_id INT(11) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(pel_id),
	FOREIGN KEY(gol_id) REFERENCES tb_golongan (gol_id),
	FOREIGN KEY(user_id) REFERENCES tb_user (user_id)
);

INSERT INTO tb_user (
	1,
	'Zorashhi@gmail.com',
	'*00A51F3F48415C7D4E8908980D443C29C69B60C9',
	'Bima Sanjaya',
	'United State of America',
	'0987654345',
	'23456',
	'1',
	'1',
	'2023-11-28 13:11:20'
	NULL
);
