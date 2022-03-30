CREATE proc Keywords_Delete
@Id int

as
DELETE FROM Keywords where id = @Id
go