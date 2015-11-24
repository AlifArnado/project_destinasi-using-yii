CREATE DATABASE destinasi;
use destinasi;

create table provinsi(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    propinsi varchar(50) DEFAULT NULL
) Engine=InnoDB;

INSERT INTO provinsi (id, propinsi) VALUES
(1, 'Daerah Istimewa Yogyakarta'),
(2, 'Jawa Tengah'),
(3, 'Jawa Barat'),
(4, 'Jawa Timur'),
(5, 'Banten');

CREATE TABLE kota (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    propinsi_id int(11) NOT NULL,
    nama_kota varchar(50) DEFAULT NULL,
    KEY FK_kota(propinsi_id),
    CONSTRAINT FK_kota FOREIGN KEY (propinsi_id) REFERENCES provinsi(id) ON DELETE CASCADE ON UPDATE CASCADE
) Engine=InnoDB;

INSERT INTO kota (propinsi_id, nama_kota) VALUES
(1,'Kodya Yogyakarta'),
(1,'Sleman'),
(1,'Bantul'),
(1,'Kulon Progo'),
(2,'Klaten'),
(2,'Magelang');
