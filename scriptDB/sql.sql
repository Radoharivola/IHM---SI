create database miniMarket;
use miniMarket;

create table Produit(
    idProduit int not null AUTO_INCREMENT PRIMARY KEY,
    nomProduit varchar(255) not null,
    imagePath varchar(255) not null,
    prix double NOT NULL not null
);

create table Caisse(
    idCaisse int not null AUTO_INCREMENT PRIMARY KEY,
    numCaisse varchar(20) not null
);

create table Category(
    idCateg int not null AUTO_INCREMENT PRIMARY KEY,
    nomCateg varchar(100) not null
);

create table CategoryProduit(
    idCateg int not null,
    idProduit int not null,
    foreign key(idCateg) references Category(idCateg),
    foreign key(idProduit) references Produit(idProduit)
); 
create table User(
    idUser int not null AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) not null,
    prenom varchar(100) not null,
    email varchar(100) not null,
    passwd varchar(255) not null
);

create table Achat(
    idAchat int not null AUTO_INCREMENT PRIMARY KEY,
    idProduit int not null,
    idUser int not null,
    idCaisse int not null,
    quantity int not null,
    foreign key(idProduit) references Produit(idProduit),
    foreign key(idUser) references User(idUser),
    foreign key(idCaisse) references Caisse(idCaisse)
);

insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);
insert into Produit values(null,'','.jpg',);