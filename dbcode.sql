CREATE TABLE userdata (
    id int(50) AUTO_INCREMENT PRIMARY KEY not null,
    surname varchar(50) not null,
    firstname varchar(50) not null,
    email varchar(100) not null,
    pwd varchar(50) not null
);

CREATE TABLE detail_post (
    idpost int(11) AUTO_INCREMENT PRIMARY KEY not null,
    titlepost longtext not null,
    descpost longtext not null,
    imgFullNameGallery longtext not null,
    orderGallery longtext not null
);


