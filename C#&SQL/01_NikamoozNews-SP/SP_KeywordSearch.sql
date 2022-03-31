CREATE proc KeywordSearch
@KeywordTitle nvarchar(50)
as
SELECT * from Keywords where Title like N'%' + @KeywordTitle + '%'
go