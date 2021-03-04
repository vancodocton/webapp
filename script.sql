drop table if exists Products;

create table Products
(
	Id int generated always as identity,
	Name text not null,
	UnitPrice int not null,
	constraint Products_PK_Id primary key (Id),
	constraint Products_CK_UnitPrice check (UnitPrice > 0)
);

insert into CompanyInventory (ProductId, Quantity, Time) values (1, 20, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (2, 10, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (3, 30, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (4, 12, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (5, 16, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (6, 40, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (7, 42, CURRENT_TIMESTAMP);
insert into CompanyInventory (ProductId, Quantity, Time) values (8, 10, CURRENT_TIMESTAMP);