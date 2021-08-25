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
    idCaisse int not null,
    quantity int not null,
    valide int not null,
    dateAjout date not null,
    foreign key(idProduit) references Produit(idProduit),
    foreign key(idCaisse) references Caisse(idCaisse)
);

drop table Achat;

create view cart as select idAchat,achat.idProduit,prix,nomProduit,sum(quantity) as quantity,(sum(quantity)*Produit.prix) as montant,idCaisse from Achat join produit on produit.idProduit=achat.idProduit where valide=0 group by idCaisse,produit.idProduit;
create view totalCart as select idCaisse,sum(montant) as montant from cart group by idCaisse;

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

insert into categoryProduit values(3,1);
insert into categoryProduit values(3,2);
insert into categoryProduit values(3,3);
insert into categoryProduit values(3,4);
insert into categoryProduit values(3,5);

insert into categoryProduit values(2,6);
insert into categoryProduit values(2,7);
insert into categoryProduit values(2,8);
insert into categoryProduit values(2,9);
insert into categoryProduit values(2,10);

insert into categoryProduit values(1,11);
insert into categoryProduit values(1,12);
insert into categoryProduit values(1,13);
insert into categoryProduit values(1,14);
insert into categoryProduit values(1,15);

delete from categoryProduit;

create view produitWithCategory as select produit.idProduit,nomProduit,imagePath,prix,nomCateg from categoryProduit join produit on categoryProduit.idProduit=produit.idProduit join category on category.idcateg=categoryProduit.idcateg;

insert into caisse values(null,'1');
insert into caisse values(null,'2');
insert into caisse values(null,'3');

