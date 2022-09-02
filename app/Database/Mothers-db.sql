/*
*	Database : 
*/
Create Database Mothers default charset 'Utf8' collate 'utf8_general_ci';

Use Mothers;

/*
*	 Table Product : 
*/
Create table if not exists Product (
	ID int primary key auto_increment,
    Image longblob,
    Product_Name varchar(255),
    Product_Description text,
    Product_Price float,
    Categorie varchar(50)
);
alter table Product
add constraint Ck1 check (Categorie in ('BEST-SELLERS','NOS GAMMES','NOS PACKS','PRODUITS ASSOCIÉS','NOTRE SÉLECTION'));


select * from Product