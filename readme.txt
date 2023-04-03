Local-Notepad-App

For this project index.php is the login page.

The password of the database is defined in the secret.php file which is included
in the Database.php file.

The columns present in the clients table.
create table client ( 
	username varchar(50) not null,
	passcode varchar(50) not null,
	name varchar(100),
	role varchar(50) not null,
	primary key(username));

The values inserted in the clients table.
insert into client(username,passcode,name,role)values('Esha345','Esha#324',
'Esha Kundu','reader');
insert into client(username,passcode,name,role)values('Adpuja@23','admin&
798','Puja Sinha','admin');

The columns present in the books table.
create table books (
	id varchar(20) not null,
	title varchar(100),
	genre varchar(100),
	date varchar(200),
	author varchar(200),
	image varchar(500),
	ratings float(4,2),
	category varchar(100),
	primary key(id));
