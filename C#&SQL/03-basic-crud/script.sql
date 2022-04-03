Create database testDB


Select 
name 
from
master.sys.databases


use testDB
create table Users
(
	Id bigint,
	UserName nvarchar(50),
	[Password] nvarchar(1000),
); 


use testDB
insert into Users (Id,Username,[Password]) values (2,'ali','@5df@123456')


use testDB
select Id,UserName from Users


use testDB
Update Users
set [Password] = '******' where Id=1


use testDB
Delete from Users


use testDB
Backup Database testDB
To Disk = 'D:\\testBackupFile.bak';