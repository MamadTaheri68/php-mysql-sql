use NikamoozAdo
create table Categories
(
	Id int primary key identity(1,1),
	ParentId int references Categories(id),
	Name nvarchar(50),
	InsertBy int,
	UpdateBy int,
	InsertDate datetime,
	UpdateDate datetime
)