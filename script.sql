create database miniMarket;
use miniMarket;

create table Produit(
    idProduit int not null AUTO_INCREMENT PRIMARY KEY,
    nomProduit varchar(255),
    prix double NOT NULL
);

create table Caisse(
    idCaisse int not null AUTO_INCREMENT PRIMARY KEY,
    numCaisse varchar(20)
);

create table Category(
    idCateg int not null AUTO_INCREMENT PRIMARY KEY,
    nomCateg varchar(100)
);

create table CategoryProduit(
    idCateg int,
    idProduit int,
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
    idProduit int,
    idUser int,
    idCaisse int,
    quantity int,
    foreign key(idProduit) references Produit(idProduit),
    foreign key(idUser) references User(idUser),
    foreign key(idCaisse) references Caisse(idCaisse)
);
