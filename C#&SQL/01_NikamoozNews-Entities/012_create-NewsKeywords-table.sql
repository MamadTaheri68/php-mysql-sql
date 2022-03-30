use NikamoozAdo
CREATE TABLE NewsKeywords
(
	NewsId int not null references News(Id),
	KeywordId int not null references Keywords(Id)
)