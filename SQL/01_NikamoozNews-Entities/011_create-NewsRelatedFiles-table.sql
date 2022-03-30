use NikamoozAdo
CREATE TABLE NewsRelatedFiles
(
	NewsId int not null references News(Id),
	NewsFiles int not null references NewsFile(Id)
)