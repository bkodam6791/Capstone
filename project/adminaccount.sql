use schoolmanagement;

create table logininfo(
loginid int not null auto_increment,
username varchar(50),
password varchar(50),
primary key(loginid)
);

-- insert into logininfo values(null, 'admin', '123');

select * from logininfo where username = 'admin' and password = '123';