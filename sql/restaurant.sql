/*
A database containing the tables needed in the restaurant application
*/ 
use restaurant;

create table if not exists food(
food_id int auto_increment,
category varchar(200) not null,
food_name varchar(200) not null,
food_price int(4) not null,
image_link varchar(255),
primary key(food_id)
)ENGINE=InnoDb DEFAULT CHARSET=latin1 AUTO_INCREMENT=10;


create table if not exists employee(
employee_id int(5) not null,
emp_fname varchar(200) not null,
emp_lname varchar(200) not null,
id_number varchar(10) not null,
emp_email varchar(200),
emp_phone varchar(30),
primary key(employee_id)
)ENGINE=InnoDb DEFAULT CHARSET=latin1 AUTO_INCREMENT=10;


create table if not exists transactions(
transaction_id int(12) not null,
food_ids varchar(255) not null, 
food_quantities varchar(255) not null, 
food_prices varchar(255) not null, 
total_price double(8,2) not null,
employee_id int(5) not null,
transaction_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
primary key(transaction_id)

)ENGINE=InnoDb DEFAULT CHARSET=latin1 AUTO_INCREMENT=10;


create table if not exists users(
employee_id int(5) not null,
user_name varchar(200) not null,
password varchar(255) not null,
status ENUM('enabled','disabled'),
user_type enum('admin','regular'),
primary key(user_name),
foreign key(employee_id) references employee(employee_id)
)ENGINE=InnoDb DEFAULT CHARSET=latin1 AUTO_INCREMENT=10;


create table if not exists reversed_transactions(
reversion_id int(10) not null,
transaction_id int(12) not null,
food_ids varchar(255) not null, 
food_quantities varchar(255) not null, 
food_prices varchar(255) not null, 
total_price double(8,2) not null,
employee_id int(5) not null,
transaction_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
primary key(reversion_id)
)ENGINE=InnoDb DEFAULT CHARSET=latin1 AUTO_INCREMENT=10;

/* Remember to create a trigger to store the reversed transactions in their table from the 
--transaction table */

