use NikamoozAdo
CREATE TABLE News
(
	Id int primary key identity(1,1),
	Title nvarchar(50),
	ShortDescription nvarchar(500),
	Body nvarchar(max),
	MainCategoryId int references Categories(id),
	MainFileId int references NewsFile(id),
	State int not null,
	FileType int,
	InsertBy int,
	UpdateBy int,
	InsertDate datetime,
	UpdateDate datetime
)