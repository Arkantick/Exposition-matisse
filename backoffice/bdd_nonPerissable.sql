drop database if exists BackOffice ;
create database BackOffice ;
use BackOffice ;

create table Artiste(
idArtiste int auto_increment,
prenom varchar(100),
nom varchar(100),
biographie TEXT,
photo varchar(200),
primary key(idArtiste)
)engine Innodb;

create table Exposition(
idExposition int auto_increment,
nomComplet varchar(100),
nomRaccourci varchar(100),
noteCommissaire TEXT,
prix decimal(5,2),
dateDebut date,
dateFin date,
responsable varchar(100),
heureOuverture varchar(10),
heureFermeture varchar(10),
artiste int,
primary key (idExposition),
foreign key (artiste) references Artiste(idArtiste)
)Engine InnoDB;

create table Oeuvres(
idOeuvre int auto_increment,
nom varchar(100),
dateOeuvre year,
typePeinture varchar(100),
description TEXT,
photoOeuvre varchar(100),
creditPhoto varchar(100),
exposition int,
primary key(idOeuvre),
foreign key(exposition) references Exposition(idExposition)
)engine InnoDB;

create table Users(
idUser int auto_increment,
login varchar(100),
motDePasse varchar(100),
email varchar(100),
primary key (id)
)engine InnoDB;

create table InfoMusee(
idMusee int auto_increment,
nom varchar(100),
adresse varchar(150),
ville varchar(100),
codePostal int,
numeroTel varchar(10),
adresseMail varchar(100),
primary key(idMusee)
)Engine InnoDB;

Insert into Artiste values (1,'Henri','Matisse','Né le 31 décembre 1869 au Cateau-Cambéris, c\'est un peintre, dessinateur, graveur et sculpteur français.<br />
                        Il est un figure majeur du XXe siècle. Tous les peintres ont été confrontés à la gloire et au génie de Matisse.<br />
                        Connu et reconnu de son vivant, la cote de Matisse n\'a cessé depuis de monter ainsi que le montre, en 2009, la valeur historique de 32 millions d\'euros atteinte par "Les Coucous", "Tapis bleu" et "Rose".','');
						
Insert into users values (1,'admin','admin','thierrydu74@hotmail.fr');
Insert into InfoMusee values (1,'Khokho René-Corail','2 rue de la culture','Saint-Symphorien',86500,'0450255090','khokhorene@musee.fr');
Insert into exposition values (1,'TRENTE-DEUX JOURS AVEC MATISSE','EXPOSITION MATISSE','<p>Lorsque le directeur du Musée, m’a fait cette demande, particulière je l’avoue, d’une exposition au nom de « 32 jour avec Matisse » je me suis demandé pourquoi ? Non pas pourquoi moi, excusez mon impertinence, mais ……. pourquoi 32 ? Hasard du calendrier ? Ou peut-être est-ce, tout simplement, le chiffre porte-bonheur d’un musée si sympathique ou tout est fait pour offrir à chacun une pause temporelle et artistique ?</p>

            <p>Après tout qu’importe ! En me mettant au travail je me suis, tout d’abord, laissé emporter par mes émotions et, associées à Matisse, elles ne manquent pas. En premier lieu, je dois vous le confier, Matisse est la première exposition où mes parents m’ont emmené. Je me souviens, ma main droite tenait mon papa quand celle de gauche, celle du cœur, ne lâchait pas ma maman. Je me remémore mes réflexions enfantines devant cette profusion de couleurs, ces formes, ces découpages. Je me souviens aussi de ma Maman qui m’encourageait en me disant « dans un musée on doit se laisser surprendre, on doit laisser libre court à notre étonnement, laisse-toi emporter par l’artiste »</p>

            <p>Permettez-moi deux conseils pour cette exposition : tout d’abord, laisser votre harmonie intérieure s’exprimer, et ensuite, comme pour tout voyage dans l’imaginaire d’un autre, laisser votre joie et votre confiance dans la vie prendre le dessus.</p>

            <p>Matisse disait souvent : « je peins ce que je vois. Je peins beaucoup car la peinture et le découpage sont les deux façons pour moi d’exprimer ma joie intérieure. Trop de couleurs ? Mais pensez à vos rêves, ils sont en couleur non ? En tout cas les miens le sont… ».</p>

            <p>C’est à ce voyage intérieur que vous convie cette exposition. Laissez émerger votre âme d’enfant, votre harmonie avec le monde. Interrogez-vous sur le bonheur et la façon d’y arriver. Laissez-vous emmener dans l’univers chatoyant et prolifique de cette artiste hors du commun qui en a inspiré tant d’autres de Pablo Picasso à Andy Warhol.</p>

            <p>Bref laissez-vous happer par la vie et… puissions-nous nous y retrouver.</p>

            <p id="p_right">Milo Crocktimoi, commissaire exposition « 32 jours avec Matisse »</p>','5.20','2017-01-01','2017-02-02','Milo JesSaisPlus','9h00','17h00',1);
