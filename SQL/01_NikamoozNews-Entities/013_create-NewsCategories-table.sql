use NikamoozAdo
CREATE TABLE NewsCategories
(
	NewsId int not null references News(Id),
	CategoryId int not null references Categories(Id)
)