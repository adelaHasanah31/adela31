CREATE DATABASE adela_portfolio;

USE adela_portfolio;

CREATE TABLE portfolio 
(
    id          INT AUTO_INCREMENT NOT NULL,
    name        VARCHAR(100) NOT NULL,
    phone       VARCHAR(100) NOT NULL,
    address     VARCHAR(100) NOT NULL,
    age         INT,
    degree      VARCHAR(100) NOT NULL,
    email       VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
)ENGINE Innodb;

SELECT * FROM portfolio;

INSERT INTO portfolio (name, phone, address, age, degree, email)
VALUE('Adela Hasanah', '+62 858-6091-8041', 'Sukabumi, west java, indonesia', 22, 'Bachelor', 'hasanahadela@gmail.com ');

CREATE TABLE qualification 
(
    id          INT AUTO_INCREMENT NOT NULL,
    name_school VARCHAR(100) NOT NULL,
    period     VARCHAR(100) NOT NULL,
    address     VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY(id)
)ENGINE Innodb;

SELECT * FROM qualification;
DROP TABLE qualification;

INSERT INTO qualification (name_school, period, address, description)
VALUE   ('Assalam junior high school', '2014-2017', 'Sukabumi, Warung Kiara, West Java, Indonesia', 'carried out junior high school education in Assalam Sukabumi from 2014 to 2017, the institution is located in the Warung Kiara area, Sukabumi District, West Java, Indonesia'),
        ('Assalam senior high school', '2017-2020', 'Sukabumi, Warung Kiara, West Java, Indonesia', 'continuing his high school education in Assalam Sukabumi. Back in 2017 to 2020, the institution was located in the Warung Kiara area, Sukabumi District, West Java, Indonesia.'),
        ('Muhammadiyah University Sukabumi', '2021-Current', 'Sukabumi, Warung Kiara, West Java, Indonesia', 'continuing his tertiary education, majoring in informatics engineering, at an institution called Muhammadiyah University Sukabumi, undergoing this education from 2021 until now');

UPDATE qualification 
SET name_school = 'Muhammadiyah University Sukabumi', address = 'Jl. R. Syamsudin, S.H. No. 50, Cikole, Kec. Cikole, Kota Sukabumi, Jawa Barat'
WHERE id = 3;


CREATE TABLE experiance 
(
    id          INT AUTO_INCREMENT NOT NULL,
    name        VARCHAR(100) NULL,
    address     VARCHAR(100) NULL,
    period      VARCHAR(100) NULL,
    description TEXT NULL,
    PRIMARY KEY (id)
)ENGINE Innodb;        

DROP TABLE experiance;

INSERT INTO experiance (name, address, period, description)
VALUE   ('Staff TU Sukabumi', 'Sukabumi, west java','2021–present','has duties such as Managing and Organizing All School       Administrative Affairs, Responsible for managing school finances, Ensuring that all school documents are in good condition and orderly, Managing school funds wisely and managing the school budget well'),
        ('Sekretaris PPDB','Sukabumi, west java','2021–2022','have duties such as checking prospective student registration files, managing executive schedules, including meetings and events
        Prepare reports, memos, letters and other documentation for executive purposes, Manage the archiving of Company documents and records systematically, Organize and coordinate meetings, including preparing agendas and recording meeting minutes
        Preparing data on prospective students, Preparing the selection of prospective students in accordance with applicable regulations, Processing data on prospective students, Reporting the results of PPDB activities for a year.'),
        ('Bendahara PPDB','Sukabumi, west java','2023 – 2024', 'Preparing the PPDB Implementation Budget, Processing all PPDB transactions accurately, efficiently and effectively, Carrying out cash checks and calculating daily transactions using excel, calculators and calculating machines, Creating PPDB Financial Reports.');

UPDATE experiance 
set name = "Staff TU Sukabumi", description = 'Mengelola dan Mengatur Segala urusan Administratif sekolah'
WHERE id = 1;

SELECT * FROM experiance;

