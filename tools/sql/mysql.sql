create table superUtilisateur(
    id_superUtilisateur int primary key auto_increment,
    email varchar(20),
    motsPasse varchar(20)
);

create table Utilisateur(
    id_utilisateur int primary key auto_increment,
    nom varchar(20),
    prenom varchar(20),
    addresse_Email varchar(20),
    motsPasse varchar(20)
);

create table Objects(
    id_Object int primary key auto_increment,
    Nom varchar(30),
    Prix decimal,
    img varchar(10),
    Descriptions varchar(30),
    id_utilisateur_proprietaire int,
    id_Categorie int,
    foreign key(id_utilisateur_proprietaire) references Utilisateur(id_utilisateur),
    foreign key(id_Categorie) references Categorie(id_Categorie)
);

create table Echange(
    id_Echange int primary key auto_increment,
    id_utilisateur int,
    id_Object_Utilisateur int, 
    id_Recepteur int, 
    id_Object_Recepteur int, 
    Confirmation int,
    dateJ DATETIME,
    foreign key(id_utilisateur) references Utilisateur(id_utilisateur),
    foreign key(id_Object_Utilisateur) references Objects(id_Object),
    foreign key(id_Recepteur) references Utilisateur(id_utilisateur),
    foreign key(id_Object_Recepteur) references Objects(id_Object)
);

create table Categorie (
    id_Categorie int primary key auto_increment,
    Nom varchar(20)
);

insert into superUtilisateur(email,motsPasse) values('admin@gmail.com','admin');

insert into Utilisateur(nom,prenom,addresse_Email,motsPasse) values('RANDRIA','steph','steph@gmail.com','steph');
insert into Utilisateur(nom,prenom,addresse_Email,motsPasse) values('RAKOTO','rakoto','rakoto@gmail.com','rakoto');

insert into Categorie(Nom) values('Vetements');
insert into Categorie(Nom) values('Appareil');
insert into Categorie(Nom) values('Livre');

insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('t-shirt noir',3000,'t-shirt1','Un t-shirt noir',1,1);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('t-shirt bleu',3000,'t-shirt2','Un t-shirt bleu',1,1);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('t-shirt nike',3500,'t-shirt3','Un t-shirt nike',2,1);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('t-shirt blanc-noir',3000,'t-shirt4','Un t-shirt blanc-noir',2,1);

insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('Samsung',20000000,'appareil1','Samsung galaxy S4',1,2);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('Apple',30000000,'appareil2','Apple nouveau model',1,2);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('Telephone',50000,'appareil3','Telephone avec de bon son',2,2);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('Redmi',70000,'appareil4','Telephone avec alarme',2,2);

insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('Charlotte Bronte',3000,'livre1','Classique',1,3);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('Les petits dragon',5000,'livre2','Livre pour enfant',1,3);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('Les soeurs de MonMorts',4000,'livre3','Classique',2,3);
insert into Objects(Nom,Prix,img,Descriptions,id_utilisateur_proprietaire,id_Categorie) values('Charlotte Bronte',3000,'livre4','Classique',2,3);


