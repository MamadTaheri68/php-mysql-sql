use NikamoozAdo
CREATE TABLE NewsFile
(
	Id int primary key identity(1,1),
	Path nvarchar(50),
	FileType int,
	InsertBy int,
	UpdateBy int,
	InsertDate datetime,
	UpdateDate datetime
)