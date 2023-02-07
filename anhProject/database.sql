Create table feedback(
    id Integer primary key auto_increment,
    name varchar(50) Not Null,
    email Varchar(100) Not Null,
    body text default '',
    data datetime
);

insert into feedback(name,email,body,date) valuaes
('Anh','anhnt18@rikkeisoft.com','I like dog', current_timestamp());