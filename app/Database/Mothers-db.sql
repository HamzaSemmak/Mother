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

select * from Product

insert into Product values
    (1, "Product-7.png ", "Product-7.png ", "Product-7.png ", 100.50, "BEST-SELLERS"),
    (2, "Product-8.png ", "Product-8.png ", "Product-8.png ", 100.50, "BEST-SELLERS"),
    (3, "Product-10.png ", "Product-10.png ", "Product-10.png ", 100.50, "BEST-SELLERS"),
    (4, "Product-11.png ", "Product-11.png ", "Product-11.png ", 100.50, "BEST-SELLERS"),
    (5, "Product-12.png", "Product-12.png", "Product-12.png", 100.50, "BEST-SELLERS"),
    (6, "Product-13.png", "Product-13.png", "Product-13.png", 100.50, "NOS GAMMES"),
    (7, "Product-15.png ", "Product-15.png ", "Product-15.png ", 100.50, "NOS GAMMES"),
    (8, "Product-16.png ", "Product-16.png ", "Product-16.png ", 100.50, "NOS GAMMES"),
    (9, "Product-17.png ", "Product-17.png ", "Product-17.png ", 100.50, "NOS PACKS"),
    (10, "Product-18.png ", "Product-18.png ", "Product-18.png ", 100.50, "NOS PACKS"),
    (11, "Protection super.jpg ", "Protection super.jpg ", "Protection super.jpg ", 100.50, "NOS PACKSPRODUITS ASSOCIÉS"),
    (12, "angelina-kichukova-1i6mrD_t9gA-unsplash.jpg ", "angelina-kichukova-1i6mrD_t9gA-unsplash.jpg ", "angelina-kichukova-1i6mrD_t9gA-unsplash.jpg ", 100.50, "PRODUITS ASSOCIÉS"),
    (13, "Capture.PNG Les Loustics 2.jpg ", "Capture.PNG Les Loustics 2.jpg ", "Capture.PNG Les Loustics 2.jpg ", 100.50, "PRODUITS ASSOCIÉS"),
    (14, "Pack 10.PNG Pack 11.PNG ", "Pack 10.PNG Pack 11.PNG ", "Pack 10.PNG Pack 11.PNG ", 100.50, "'NOTRE SÉLECTION"),
    (15, "Pack-1.PNG ", "Pack-1.PNG ", "Pack-1.PNG ", 100.50, "NOTRE SÉLECTION"),
    (16, "Pack-2.PNG ", "Pack-2.PNG ", "Pack-2.PNG ", 100.50, "NOTRE SÉLECTION"),
    (17, "Pack-3.PNG ", "Pack-3.PNG ", "Pack-3.PNG ", 100.50, "NOTRE SÉLECTION"),
    (18, "Product-1.png", "Product-1.png", "Product-1.png", 100.50, "NOTRE SÉLECTION"),
    (19, "Product-2.png ", "Product-2.png ", "Product-2.png ", 100.50, "BEST-SELLERS"),
    (20, "Product-3.png ", "Product-3.png ", "Product-3.png ", 100.50, "NOS GAMMES"),
    (21, "Product-4.png ", "Product-4.png ", "Product-4.png ", 100.50, "NOS PACKS"),
    (22, "Product-5.png ", "Product-5.png ", "Product-5.png ", 100.50, "PRODUITS ASSOCIÉS"),
    (23, "Product-6.png", "Product-6.png", "Product-6.png", 100.50, "NOTRE SÉLECTION");