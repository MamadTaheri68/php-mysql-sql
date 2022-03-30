use NikamoozAdo
create table Keywords
(
	Id int primary key identity(1,1),
	Title nvarchar(50),
	InsertBy int,
	UpdateBy int,
	InsertDate datetime,
	UpdateDate datetime
)