# my database tables

## user table

'''
create table users (
users_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
users_uid TINYTEXT not null,
users_pwd LONGTEXT not null,
users_email TINYTEXT not null
);
'''

## profiles table

'''
create table profiles (
profiles_id int not null AUTO_INCREMENT,
profiles_about TEXT not null,
profiles_introtitle TEXT not null,
profiles_introtext TEXT not null,
users_id int,
primary key (profiles_id),
foreign key (users_id) references users(users_id)
);
'''
