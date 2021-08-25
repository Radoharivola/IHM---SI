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
    valide varchar(5),
    dateAchat date,
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


insert into admin values('','Admin1','123');

insert into achat values(null,2,1,1,1,'2021-05-05');
insert into achat values(null,2,1,10,1,'2021-05-05');
insert into achat values(null,2,1,1,1,'2021-05-05');
insert into achat values(null,5,1,16,1,'2021-06-05');
insert into achat values(null,2,2,1,1,'2021-05-05');
insert into achat values(null,1,2,1,1,'2021-05-02');
insert into achat values(null,1,2,1,1,'2021-05-03');
insert into achat values(null,1,3,1,1,'2021-05-03');
insert into achat values(null,1,3,1,1,'2021-05-12');
insert into achat values(null,2,3,1,1,'2021-05-25');
insert into achat values(null,2,3,1,1,'2021-06-26');
insert into achat values(null,2,3,1,1,'2021-06-26');
insert into achat values(null,2,3,1,1,'2021-05-26');

 create or replace view AchatProduitCaisse as select achat.idAchat,achat.idCaisse,achat.idProduit,produit.nomProduit,produit.imagePath,produit.prix,caisse.numCaisse,achat.dateAchat,achat.valide,achat.quantity from achat,produit,caisse where achat.idProduit=produit.idProduit and achat.idCaisse=caisse.idCaisse and achat.valid=1;
 create view APCC as select APC.*,category.* from AchatProduitCaisse as APC,category,categoryProduit where category.idCateg=categoryProduit.idCateg and categoryProduit.idProduit=APC.idProduit;
-- liaison ana table fotsin reo ambony reo fa aza rarahina

  create or replace  view statsVM as select date_format(dateAchat,'%M'),year(dateAchat),sum(quantity*prix) from AchatProduitCaisse group by year(dateAchat),month(dateAchat) order by year(dateAchat),month(dateAchat);
 --  Stats  de vente par mois par annee

 create or replace view statsVC as select idCateg,nomCateg,sum(quantity*prix) from APCC group by idCateg,nomCateg 
--  Stats  de vente par Categorie


 create view statsVCss select idCaisse,numCaisse,sum(quantity*prix) from AchatProduitCaisse as APC group by idCaisse,numCaisse 
--  Stats  de vente par caisse 


    select * from AchatProduitCaisse as APC,category,categoryProduit where category.idCateg=categoryProduit.idCateg and categoryProduit.idProduit=APC.idProduit;




insert into categoryProduit values ('1','3');
insert into categoryProduit values ('1','4');
insert into categoryProduit values ('2','5');
insert into categoryProduit values ('3','6');
insert into categoryProduit values ('2','2');
insert into categoryProduit values ('1','7');
insert into categoryProduit values ('3','8');
insert into categoryProduit values ('2','9');
insert into categoryProduit values ('2','10');
insert into categoryProduit values ('1','11');
insert into categoryProduit values ('2','12');
insert into categoryProduit values ('1','13');
insert into categoryProduit values ('2','14');
insert into categoryProduit values ('3','15');
insert into categoryProduit values ('1','16');