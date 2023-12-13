-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2023-06-19 10:54:33.383

-- tables
-- Table: admission
CREATE TABLE admission (
    id int  NOT NULL AUTO_INCREMENT,
    tanggal_daftar date  NOT NULL,
    user_id int  NOT NULL,
    course_id int  NOT NULL,
    CONSTRAINT admission_pk PRIMARY KEY (id)
);

-- Table: contact
CREATE TABLE contact (
    id int  NOT NULL AUTO_INCREMENT,
    judul varchar(30)  NOT NULL,
    pesan varchar(512)  NOT NULL,
    user_id int  NOT NULL,
    CONSTRAINT contact_pk PRIMARY KEY (id)
);

-- Table: course
CREATE TABLE course (
    id int  NOT NULL AUTO_INCREMENT,
    nama varchar(30)  NOT NULL,
    deskripsi varchar(512)  NOT NULL,
    harga int  NOT NULL,
    durasi int  NOT NULL,
    partner_id int  NOT NULL,
    tutor_id int  NOT NULL,
    CONSTRAINT course_pk PRIMARY KEY (id)
);

-- Table: partner
CREATE TABLE partner (
    id int  NOT NULL AUTO_INCREMENT,
    nama varchar(30)  NOT NULL,
    deskripsi varchar(512)  NOT NULL,
    CONSTRAINT partner_pk PRIMARY KEY (id)
);

-- Table: tutor
CREATE TABLE tutor (
    id int  NOT NULL AUTO_INCREMENT,
    nama varchar(30)  NOT NULL,
    email varchar(30)  NOT NULL,
    CONSTRAINT tutor_pk PRIMARY KEY (id)
);

-- Table: user
CREATE TABLE user (
    id int  NOT NULL AUTO_INCREMENT,
    nama varchar(30)  NOT NULL,
    no_telp varchar(30)  NOT NULL,
    email varchar(30)  NOT NULL,
    password varchar(30)  NOT NULL,
    CONSTRAINT user_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: admission_course (table: admission)
ALTER TABLE admission ADD CONSTRAINT admission_course FOREIGN KEY admission_course (course_id)
    REFERENCES course (id);

-- Reference: admission_user (table: admission)
ALTER TABLE admission ADD CONSTRAINT admission_user FOREIGN KEY admission_user (user_id)
    REFERENCES user (id);

-- Reference: contact_user (table: contact)
ALTER TABLE contact ADD CONSTRAINT contact_user FOREIGN KEY contact_user (user_id)
    REFERENCES user (id);

-- Reference: course_partner (table: course)
ALTER TABLE course ADD CONSTRAINT course_partner FOREIGN KEY course_partner (partner_id)
    REFERENCES partner (id);

-- Reference: course_tutor (table: course)
ALTER TABLE course ADD CONSTRAINT course_tutor FOREIGN KEY course_tutor (tutor_id)
    REFERENCES tutor (id);

INSERT INTO `user` (`id`, `nama`, `no_telp`, `email`, `password`) VALUES
(1, 'Dafian', '085161397832', 'dafian@gmail.com', 'Testing123'),
(2, 'Vino', '085161397831', 'vino@gmail.com', 'Testing123'),
(3, 'Fred', '085161397833', 'fred@gmail.com', 'Testing123');
(4, 'Alfan', '085161397834', 'alfan@example.com', 'Testing123');

INSERT INTO `contact` (`id`, `judul`, `pesan`, `user_id`) VALUES
(1, 'Perbaikan', 'Terdapat beberapa pertanyaan di course yang jawabanya kurang tepat', 1),
(2, 'Pujian', 'Course nya bagus dan sangat mudah untuk dipahami', 2),
(3, 'Pujian', 'Saya suka dengan cara tutor memberikan pelajaran', 3);

INSERT INTO `partner` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Coursera', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.'),
(2, 'Ruang Guru', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.'),
(3, 'Digital Ocean', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.'),
(4, 'Binar', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.'),
(5, 'Niagahoster', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.');

INSERT INTO `tutor` (`id`, `nama`, `email`) VALUES
(1, 'Keyisa', 'keyisa@gmail.com'),
(2, 'Ahmad', 'ahmad@gmail.com'),
(3, 'Jauhari', 'jauhari@gmail.com'),
(4, 'Dewangga', 'dewangga@gmail.com'),
(5, 'Dika', 'dika@gmail.com');

INSERT INTO `course` (`id`, `nama`, `deskripsi`, `harga`, `durasi`, `partner_id`, `tutor_id`) VALUES
(1, 'Kalkulus', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.', 25000, 120, 1, 2),
(2, 'Fisika', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.', 25000, 120, 2, 1),
(3, 'Kimia', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.', 25000, 120, 1, 2),
(4, 'Dasar Pemrograman', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.', 25000, 120, 3, 4),
(5, 'Struktur Data', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.', 25000, 120, 4, 3),
(6, 'Aljabar Linear', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.', 25000, 120, 5, 5),
(7, 'Sistem Digital', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.', 25000, 120, 2, 1),
(8, 'Probstat', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis neque quod deserunt fuga.', 25000, 120, 5, 2);