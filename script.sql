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
create table admin(
    idAdmin int not null AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) not null,
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

insert into Produit values(null,'sel','sel.jpg',200);
insert into Produit values(null,'bob','bob.jpg',300);
insert into Produit values(null,'beurre','beurre.jpg',4000);
insert into Produit values(null,'savon pure','savon pure.jpg',400);
insert into Produit values(null,'savon liquide','savon liquide.jpg',2500);

insert into Produit values(null,'sèche cheveux','tsaloMaster.jpg',300000);
insert into Produit values(null,'Grille Pain','grillePain.jpg',500000);
insert into Produit values(null,'batteuse','smeg.jpg',120000);
insert into Produit values(null,'Machine a cafe','coffeemachine.jpg',2000000);
insert into Produit values(null,'Appareil photo','pdpMaster.jpg',6000000);
insert into Produit values(null,'M1 potatoBook','potatoBook.jpg',1);
insert into Produit values(null,'calulatrice casio','casio.jpg',80000);
insert into Produit values(null,'auto radio','autoradio.jpg',1000000);
insert into Produit values(null,'TV Stick','Stick.jpg',2000000);
insert into Produit values(null,'mixer grinder','mixer grinder.jpg',50000);


insert into category values(null,'Electronique');
insert into category values(null,'Electroménager');
insert into category values(null,'PPN');

insert into caisse values(null,'1');
insert into caisse values(null,'2');
insert into caisse values(null,'3');
