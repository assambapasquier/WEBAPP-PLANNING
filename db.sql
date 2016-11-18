
---------------------------------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Utilisateurs (matricule varchar(25) NOT NULL, passwd varchar(255) NOT NULL, nom varchar(255) NOT NULL, prenom varchar(255), dateNaiss date, lieuNaiss varchar(255), nationalite varchar(255), tel1 varchar(255) NOT NULL, tel2 varchar(255), tel3 varchar(255), email varchar(255), Villes int(11) NOT NULL, Services int(10), Departements int(11), Directions int(11), PRIMARY KEY (matricule));
CREATE TABLE Responsables (matricule varchar(25) NOT NULL, mot_de_passe varchar(255) NOT NULL, Roles int(11) NOT NULL, Services int(10), Departements int(11), Directions int(11), PRIMARY KEY (matricule));
CREATE TABLE Services (id int(10) NOT NULL AUTO_INCREMENT, nom_service varchar(255) NOT NULL, Departements int(11), Directions int(11), PRIMARY KEY (id));
CREATE TABLE Permanences (id int(10) NOT NULL AUTO_INCREMENT, libelle varchar(255) NOT NULL, Services int(10), Departements int(11), Directions int(11), PRIMARY KEY (id));
CREATE TABLE LignePerms (id int(10) NOT NULL AUTO_INCREMENT, date_perm date NOT NULL, Permanences int(10) NOT NULL, PRIMARY KEY (id));
CREATE TABLE LigneAstrs (id int(10) NOT NULL AUTO_INCREMENT, date_deb date, date_fin date, Lieu int(10) NOT NULL, Utilisateurs varchar(25) NOT NULL, Services int(10), Departements int(11), Directions int(11), PRIMARY KEY (id));
CREATE TABLE NumeroUtiles (numero int(10) NOT NULL AUTO_INCREMENT, libelle varchar(255) NOT NULL, PRIMARY KEY (numero));
CREATE TABLE Lieu (id int(10) NOT NULL AUTO_INCREMENT, libelle varchar(255) NOT NULL, PRIMARY KEY (id));
CREATE TABLE Departements (id int(11) NOT NULL AUTO_INCREMENT, libelle varchar(255) NOT NULL, description text NOT NULL, Directions int(11) NOT NULL, PRIMARY KEY (id));
CREATE TABLE Villes (id int(11) NOT NULL AUTO_INCREMENT, nom_ville varchar(255) NOT NULL, PRIMARY KEY (id));
CREATE TABLE Directions (id int(11) NOT NULL AUTO_INCREMENT, libelle varchar(255) NOT NULL, PRIMARY KEY (id));
CREATE TABLE LignePerms_Utilisateurs (LignePerms int(10) NOT NULL, matricule varchar(25) NOT NULL, heure_deb time, heure_fin time, PRIMARY KEY (LignePerms, matricule));
CREATE TABLE Roles (id int(11) NOT NULL AUTO_INCREMENT, libelle varchar(255) NOT NULL, PRIMARY KEY (id));
CREATE TABLE Permanences_NumeroUtiles (Permanences int(10) NOT NULL, numero int(10) NOT NULL, PRIMARY KEY (Permanences, numero));
CREATE TABLE Connexions (date_conn date NOT NULL, heure time NOT NULL, matricule varchar(25) NOT NULL, PRIMARY KEY (date_conn));
CREATE TABLE Taches (id int(11) NOT NULL AUTO_INCREMENT, libelle varchar(255) NOT NULL, description varchar(255), statut int(2) NOT NULL, date_tache date NOT NULL, matricule varchar(25) NOT NULL, PRIMARY KEY (id));
CREATE TABLE Rapport_jours (id int(11) NOT NULL AUTO_INCREMENT, commentaire varchar(255), date_rapport date NOT NULL, matricule varchar(25) NOT NULL, Responsablesmatricule varchar(25) NOT NULL, PRIMARY KEY (id));
CREATE TABLE Rapports_jours (id int(11) NOT NULL AUTO_INCREMENT, commentaire varchar(255) NOT NULL, date_rapport date NOT NULL, matricule varchar(25) NOT NULL, Responsablesmatricule varchar(25) NOT NULL, PRIMARY KEY (id));
ALTER TABLE LigneAstrs ADD INDEX FKLigneAstrs434741 (Lieu), ADD CONSTRAINT FKLigneAstrs434741 FOREIGN KEY (Lieu) REFERENCES Lieu (id);
ALTER TABLE Utilisateurs ADD INDEX FKUtilisateu852956 (Villes), ADD CONSTRAINT FKUtilisateu852956 FOREIGN KEY (Villes) REFERENCES Villes (id);
ALTER TABLE LignePerms_Utilisateurs ADD INDEX FKLignePerms210792 (matricule), ADD CONSTRAINT FKLignePerms210792 FOREIGN KEY (matricule) REFERENCES Utilisateurs (matricule);
ALTER TABLE LignePerms_Utilisateurs ADD INDEX FKLignePerms413241 (LignePerms), ADD CONSTRAINT FKLignePerms413241 FOREIGN KEY (LignePerms) REFERENCES LignePerms (id);
ALTER TABLE Responsables ADD INDEX FKResponsabl4098 (matricule), ADD CONSTRAINT FKResponsabl4098 FOREIGN KEY (matricule) REFERENCES Utilisateurs (matricule);
ALTER TABLE Responsables ADD INDEX FKResponsabl560648 (Roles), ADD CONSTRAINT FKResponsabl560648 FOREIGN KEY (Roles) REFERENCES Roles (id);
ALTER TABLE Responsables ADD INDEX FKResponsabl13549 (Services), ADD CONSTRAINT FKResponsabl13549 FOREIGN KEY (Services) REFERENCES Services (id);
ALTER TABLE Responsables ADD INDEX FKResponsabl560336 (Departements), ADD CONSTRAINT FKResponsabl560336 FOREIGN KEY (Departements) REFERENCES Departements (id);
ALTER TABLE Responsables ADD INDEX FKResponsabl147685 (Directions), ADD CONSTRAINT FKResponsabl147685 FOREIGN KEY (Directions) REFERENCES Directions (id);
ALTER TABLE Utilisateurs ADD INDEX FKUtilisateu726880 (Services), ADD CONSTRAINT FKUtilisateu726880 FOREIGN KEY (Services) REFERENCES Services (id);
ALTER TABLE Permanences_NumeroUtiles ADD INDEX FKPermanence993467 (numero), ADD CONSTRAINT FKPermanence993467 FOREIGN KEY (numero) REFERENCES NumeroUtiles (numero);
ALTER TABLE Permanences_NumeroUtiles ADD INDEX FKPermanence717780 (Permanences), ADD CONSTRAINT FKPermanence717780 FOREIGN KEY (Permanences) REFERENCES Permanences (id);
ALTER TABLE LignePerms ADD INDEX FKLignePerms379479 (Permanences), ADD CONSTRAINT FKLignePerms379479 FOREIGN KEY (Permanences) REFERENCES Permanences (id);
ALTER TABLE Departements ADD INDEX FKDepartemen542192 (Directions), ADD CONSTRAINT FKDepartemen542192 FOREIGN KEY (Directions) REFERENCES Directions (id);
ALTER TABLE Services ADD INDEX FKServices977475 (Departements), ADD CONSTRAINT FKServices977475 FOREIGN KEY (Departements) REFERENCES Departements (id);
ALTER TABLE Services ADD INDEX FKServices730545 (Directions), ADD CONSTRAINT FKServices730545 FOREIGN KEY (Directions) REFERENCES Directions (id);
ALTER TABLE LigneAstrs ADD INDEX FKLigneAstrs665330 (Utilisateurs), ADD CONSTRAINT FKLigneAstrs665330 FOREIGN KEY (Utilisateurs) REFERENCES Utilisateurs (matricule);
ALTER TABLE LigneAstrs ADD INDEX FKLigneAstrs538479 (Services), ADD CONSTRAINT FKLigneAstrs538479 FOREIGN KEY (Services) REFERENCES Services (id);
ALTER TABLE LigneAstrs ADD INDEX FKLigneAstrs964593 (Departements), ADD CONSTRAINT FKLigneAstrs964593 FOREIGN KEY (Departements) REFERENCES Departements (id);
ALTER TABLE LigneAstrs ADD INDEX FKLigneAstrs298975 (Directions), ADD CONSTRAINT FKLigneAstrs298975 FOREIGN KEY (Directions) REFERENCES Directions (id);
ALTER TABLE Permanences ADD INDEX FKPermanence711980 (Departements), ADD CONSTRAINT FKPermanence711980 FOREIGN KEY (Departements) REFERENCES Departements (id);
ALTER TABLE Permanences ADD INDEX FKPermanence685724 (Services), ADD CONSTRAINT FKPermanence685724 FOREIGN KEY (Services) REFERENCES Services (id);
ALTER TABLE Permanences ADD INDEX FKPermanence551588 (Directions), ADD CONSTRAINT FKPermanence551588 FOREIGN KEY (Directions) REFERENCES Directions (id);
ALTER TABLE Utilisateurs ADD INDEX FKUtilisateu152995 (Departements), ADD CONSTRAINT FKUtilisateu152995 FOREIGN KEY (Departements) REFERENCES Departements (id);
ALTER TABLE Utilisateurs ADD INDEX FKUtilisateu110574 (Directions), ADD CONSTRAINT FKUtilisateu110574 FOREIGN KEY (Directions) REFERENCES Directions (id);
ALTER TABLE Connexions ADD INDEX FKConnexions389656 (matricule), ADD CONSTRAINT FKConnexions389656 FOREIGN KEY (matricule) REFERENCES Utilisateurs (matricule);
ALTER TABLE Taches ADD INDEX FKTaches790901 (matricule), ADD CONSTRAINT FKTaches790901 FOREIGN KEY (matricule) REFERENCES Utilisateurs (matricule);
ALTER TABLE Rapport_jours ADD INDEX FKRapport_jo930128 (matricule), ADD CONSTRAINT FKRapport_jo930128 FOREIGN KEY (matricule) REFERENCES Utilisateurs (matricule);
ALTER TABLE Rapport_jours ADD INDEX FKRapport_jo907158 (Responsablesmatricule), ADD CONSTRAINT FKRapport_jo907158 FOREIGN KEY (Responsablesmatricule) REFERENCES Responsables (matricule);
ALTER TABLE Rapports_jours ADD INDEX FKRapports_j633641 (matricule), ADD CONSTRAINT FKRapports_j633641 FOREIGN KEY (matricule) REFERENCES Utilisateurs (matricule);
ALTER TABLE Rapports_jours ADD INDEX FKRapports_j203646 (Responsablesmatricule), ADD CONSTRAINT FKRapports_j203646 FOREIGN KEY (Responsablesmatricule) REFERENCES Responsables (matricule);

-----------------------------------------------------------------------------------------------------------------------------------------------------

insert into Villes values (1,'Douala'),(2,'Kribi'),(3,'Limbe'),(4,'Yaounde'), (5,'Ngaoundere'),(6,'Bertoua'),(7,'Maroua'),
(8,'Garoua'),(9,'Bamenda'),(10,'Bafoussam'),(11,'Ebolowa'),(12,'Buea');

insert into Directions values (1,'IP'), (2,'DSS'), (3,'DAJ'), (4,'DNQ'), (5,'PRG'), (6,'CABDG'), 
(7,'CSuiv'), (8,'Ctrad'), (9,'AttDir'), (10,'DAC'), (11,'DMC'), (12,'DCOMMER'), (13,'DPP'), (14,'DInfr'), (15,'DRIMPS'), (16,'DFB'), 
(17,'DRH'), (18,'DAP'), (19,'DUDouala'), (20,'DUKribi'), (21,'DULimbe'), (22,'DUYaounde'), (23,'RRAD'), (24,'RRC'), (25,'RRE'), (26,'RREN'),
(27,'RRL'), (28,'RRN'), (29,'RRNO'), (30,'RRO'),(31,'RRS'), (32,'RRSO');

insert into Departements values (1,'CAJ','chargé du respect de la légalité, conduite des affaires, expertise juridique, dossiers auprès des juridictions,contrat, protocole et convention juridiques, protection de la proprieté intellectuelle',3),
(2,'CReg','chargé du traitement des dossiers à caractere reglementaire, suivi des doosiers aupres des instances de regulation, elaboration des catalogues, partenariat, convention de partenariat avec operateur',3),
(3,'CCont','charge de la defense des interets, arbirtrage, contenitux, precontentieux, traitement des recours gracieux des liens, recouvrement des creances',3),
(4,'CAMR','charge de l\audit et du management des risques, du controle interne, processus et structure operationnelles, gestion des ressources, manuel de procdure, management des risques',10),
(5,'CC','controle du budget et moyens, tableaux de bords, realisation prevision, verification, synthese sur le budget',10),
(6,'CQN','charge de la norme et de la qualite, management de la qualite, respect des normes et standards internationaux, test d\'evaluation et de qualification, reporting. Enquete de satisfaction des clients',4),
(7,'CGC','charge de la gestion des changements, processus de transition, nouveaux produit, procedure de lancement des nouveaux produits, communication',4),
(8,'DM','charge du marketing, nouvelles opportunites du marche et de produit, veille commerciale et concurrentielle, etude de la concurrence, tarification et politique de prix, developpement des ventes, concours, jeux tombola',11),
(9,'DCCI','charge de la communication commerciale et institutionnelle, support de communication, publications des information diffusees, diffusion, presse, medias et regie de communication, partenariat mediatique',11),
(10,'DCD','charge de la communication digitale, charte editoriale web, referencement, media sociaux, developpement des contenus, visibilite de l\'entreprise en ligne, bloguers et influenceurs cibles, client web, analyse du trafic',11),
(11,'DOperateurs','charge des operateurs, chiffres d\'affaire, catalogue d\'interconnexion, prospection, gestion des plans tarifaires, facture et facturation des clients, reglement des clients',12),
(12,'DDPart','charge de la distribution et des partenariat, gestion des distributeurs, commande et gestion du stock',12),
(13,'DRCli','charge de la relation client, gestion des contrats de vente, controle des operations de facturation, qualite de service client, clientele, performance des service offerts à la clientele, suivi des ventes, tableaux de bord, reporting',12),
(14,'CPlanifDev','charge de la fixation des objectifs generaux de la mise en oeuvre du plan de developpement, objectifs generaux de developpement des infrastructures (infrastructure), des reseaux (reseau) et des services (service). Identification et formulation des programmes et des projets, plannification et suivi des programmes et projets, etude des programmes, reporting hebdomadaire',13),
(15,'ChefProj','charge de la coordination des projets, maitre d\'ouvrage et maitre d\'oeuvre, coordination generale des activites qui concourent a la reussite du projet',13),
(16,'IngProj','charge de l\'analyse et des la conception des projets',13),
(17,'DRTrans','charge de l\'exploitation de la maintenance et de la supervision des stations de cables, de telephone à sattelites et des infrastructures de transmission terrestres. gestion optimale des ressources reseaux et service de transmission, planification des circuits de trafic, restauration et retablissement des liaisons, maintenance des supports de trasmission, analyse des performances et suivi des actions d\amelioration, retransmission radio tv (TV ou television), routage, cable sous-marin, satellites',14),
(18,'DRAcc','charge des reseaux d\acces, des noeuds de raccordement, rehabilitation sur les reseaux d\acces, acces filaire et radio, jonction urbaine',14),
(19,'DEEnv','charge de l\'energie et de l\'environnement, introduction des energies renouvellables, eau, electricite, securite de l\'entreprise, controle d\'acces, climatisation, environnement, controle energetique.',14),
(20,'DSSIC','charge de la securite des systemes d\'information et des communication, disponibilite, fiabilite, integrite et non-repudiation des systems d\'information et des communications electroniques, maitrise des risques, vulgarisation de la politique de securite, centralisation des commandes du materiel informatique, conduite des audits, gestion des incidents aupres des clients (de la clientele)',15),
(21,'DSI','charge du systeme d\'information, de l\'exploitation et du developpement des applications metiers, developpement des applications mobiles, mise en place des entreports et des outils de business intelligence, collecte, mise en forme exploitable par le marketing des donnees du marche, administration des bases de donnees, service de facturation, services a valeur ajoutee, securite des donnees des plateformes de services',15),
(22,'DRIP_RE','charge des reseaux ip et reseau d\'entreprise, gestion et exploitation des liens IP internationaux des points d\'atterissement, routage avec les fournisseurs d\'acces internet, de transit et de peering. fourniture de service aux operateurs et aux ISP, gestion de la ressource de numerotation internet, maintenance du coeur IP/MPLS, elaboration des offres commerciales',15),
(23,'DPS','charge de la plateforme des services, supervision de la plateforme de l\IMS, maintenance et supervision du reseau intelligent et des plateformes de reseau CDMA, maintenance et supervision des plateformes multimedia: IPTV, VOD, VOBB, RCS',15),
(24,'SDCF','charge de la comptabilite et de la fiscalite, exploitation des documents comptables, comptabilite analytique, inventaires physique des immobilisations, elaboration du bilan et des etats financiers, tenue de la documentation fiscale, suivi du contentieux fiscal, services des impots',16),
(25,'SDTr','charge de la tresorerie, suivi et controle des comptes bancaires, titre de paiement des recus, suivi du budget, gestion de la caisse du siege, controle des caisses de la societe, reglement aupres des fournisseurs',16),
(26,'SDFB','charge du financement et du budget, elaboration du plan d\'affaire de la societe, recherche du financement, gestion de la dette, execution du budget',16),
(27,'SDRec','charge du recouvrement, coordination et suivi des objectifs de recouvrement, activites de recouvrement, determination de la creance reelle de la societe, rapports periodiques de recouvrement sur l\'tendue du territoire, suspension des clients redevables, securisation du chiffre d\'affaire de l\'entreprise',16),
(28,'SDAAS','charge de l\'administration et des affaires sociales, tenue du dossier et des fichiers du personnel, suivi du temp de travail et de la discipline, remuneration et traitement de la paie, gestion des conges, charge du travail et de la prevoyance sociale, personnel et syndicat, assurance maladie, assurance sante, medecine du travail, activites culturelles et sports',17),
(29,'SDGCR','charge de la gestion des carrieres et du rendement, fiche de poste de travail, organisation des unites de travail, besoin en ressource humaine, recrutement, gestion previsionnelle, integration, statut',17),
(30,'SDDRH','charge du developpement des ressources humaines, elaboration du plan annuel de formation, action de formation du personnel en interne, accopagnement individualise des employes necessitant une evolution ou une reorientation professionnelle, accompagnement des managers dans le reperage des potentialites en termes d\'apprentissage des agents d\'integration de nouvelles recrues, adaptation des competences des employes aux postes de travail, organisation et gestion des stages, relation avec les ecoles et institutions de formations, centre de formation de l\'entreprise',17),
(31,'SDAchat','charge des achats, centralisation des commandes, suivi du journal des marches, suivi des operations de dedouanement en rapport avec les transitaires, reception des marches, magasin',18),
(32,'SDPatr','charge du patrimoine, inventaire du patrimoine de la societe, centralisation des donnees du patrimoine, cession et mise en rebus d\'actifs, acquisition des biens meubles et immeubles, locaton et baux (bail), locatio des locaux, gestion du materiel roulant, declaration et suivi des sinistres, transport, assurance, garages de yaounde et douala',18);

insert into Services values (1,'SDoc',null,3),(2,'SSR_DAJ',null,3),(3,'SSR_DAC',null,10),
(4,'SCour' ,null,6),(5,'SProt' ,null,6),(6,'SArch' ,null,6),(7,'SRP' ,null,6),(8,'SSR_CAB' ,null,6),
(9,'ClubCAMTEL' ,null,6),(10,'SSR_CSuiv' ,null,7),(11,'SSR_CTrad' ,null,8),(12,'SSB' ,null,11),(13,'SSR_DMC' ,null,11),
(14,'ChefMarque' ,8,11),(15,'SPT' ,8,11),(16,'SMIntell' ,8,11),(17,'SPEv' ,8,11),
(18,'CCommMarque'  ,9,11),(19,'SCInst' ,9,11),(20,'SCinterne' ,9,11),(21,'SDRPr' ,9,11),
(22,'SCMng' ,10,11),(23,'SWebMark' ,10,11),(24,'CCAMWEB' ,10,11),
(25,'RespVente' ,null,12),(26,'SSR_DCOMMER' ,null,12),(27,'SOI' ,11,12),(28,'SON' ,11,12),(29,'SCOp' ,11,12),
(30,'SSOp' ,11,12),(31,'SGPart' ,12,12),(32,'SGRDist' ,12,12),(33,'SGCStock' ,12,12),(34,'SAdminVente' ,13,12),(35,'SFact' ,13,12),
(36,'ChargeRCli' ,13,12),(37,'CPFact' ,13,12),(38,'CContacts' ,13,12),(39,'SSR_DPP' ,null,13),(40,'SAPTech' ,null,14),
(41,'SCmdTech' ,null, 14),(42,'SSR_Dinfr' ,null,14),(43,'MagNat' ,null,14),(44,'LabTelecom' ,null,14),(45,'SRoutTraf' ,17,null),
(46,'STCablSM' ,17,14),(47,'STSatell' ,17,14),(48,'SLTransNat' ,17,14),(49,'SInfr' ,17,14),(50,'SRAccFil' ,18,14),(51,'SRAccRad' ,18,14),
(52,'SjoncUrb' ,18,14),(53,'SEner' ,18,14),(54,'SClimEnv' ,18,14),(55,'CContrEner' ,18,14),(56,'CSSupp' ,null,15),(57,'CNatSMng' ,null,15),
(58,'CHWeb_Mess' ,null,15),(59,'CNSRSyst' ,null,15),(60,'SSR_DRIMPS' ,null,15),(61,'SSecRPP' ,20, 15),(62,'SInfrInfo' ,20, 15),
(63,'SGAdmIntrExtra' ,20, 15),(64,'SCmdMMatInfo' ,20, 15),(65,'SDevDM' ,21, 15),
(66,'SExplApp' ,21, 15),(67,'SRoutISAut' ,22,15),(68,'SDNS_GAIP' ,22,15),(69,'SRIP_MPLS_RE' ,22,15),(70,'SIngSol' ,22,15),
(71,'SPCDMA' ,23,15),(72,'SPMM' ,23,15),(73,'SIMS' ,23,15),(74,'CGCredComm' ,null,16),(75,'SSR_DFB' ,null,16),(76,'SCG' ,24,16),
(77,'SCAnal' ,24,16),(78,'SFisc' ,24,16),(79,'SCompt' ,25,16),(80,'SOpEtr' ,25,16),(81,'SOpNat' ,25,16),(82,'SCRR' ,27,16),
(83,'SRCStra' ,27,16),(84,'SRevAssur' ,27,16),(85,'SRFin' ,26,16),(86,'SGDette' ,26,16),(87,'SBudget' ,26,16),(88,'SSR_DRH' ,null,17),
(89,'SPers' ,28,17),(90,'SRPaie' ,28,17),(91,'SSSTrav' ,28,17),(92,'SASCSport' ,28,17),
(93,'SGPRH' ,29,17),(94,'SRecrut' ,29,17),(95,'SGCarr' ,29,17),(96,'SGRend' ,29,17),
(97,'SGForm' ,30,17),(98,'SDevCont' ,30,17),(99,'CFormCAMTEL' ,30,17),(100,'SSR_DAP' ,null,18),
(101,'SMarche' ,31,18),(102,'STransit' ,31,18),(103,'MagasinSiege' ,31,18);

insert into Lieu values (1,'CIY');

insert into Utilisateurs values ('007A','aaaa','assamba','pasquier','2016-09-23','Nanga-Eboko','Camerounaise','243025452','','','assamba@gmail.com',4,null, 21, 15),
('007B','aaaa','takam','leo','2010-02-03','Dschang','Camerounaise','223545878','','','leo@yahoo.fr',4,21, 9, 11),
('007C','aaaa','tabi','claude','2010-02-03','Mbalmayo','Camerounaise','228755878','','','tabi@yahoo.fr',1,4, null, 6),
('007D','aaaa','onana','david','2010-02-03','Kousseri','Camerounaise','223545878','','','onana@yahoo.fr',6,4, null, 6),
('007E','aaaa','nkoto','ernest','2010-02-03','Bagante','Camerounaise','243545878','','','nkoto@yahoo.fr',4,65, 21, 15),
('007F','aaaa','abanda','serges','2010-02-03','Yaounde','Camerounaise','223455878','','','abanda@yahoo.fr',6,4, null, 6),
('007G','aaaa','bouetou','yves','2010-02-03','Douala','Camerounaise','223974878','','','bouetou@yahoo.fr',4,66, 21, 15);

insert into Roles values (1,'Administrateur'),(2,'DG'),(3,'DGA'),(4,'Directeur'),(5,'ChefDepartement'),(6,'ChefService');

insert into Responsables values ('007A', 'admin', 5, null, 21, null);

insert into NumeroUtiles values (243526587,'MSAN NKOMO'),(243568521,'MSAN Brasseries'),(222548758,'MSAN HPPT'); 

insert into Permanences values (1,'CAN 2016',null, 21, null),
(2,'Visite Francois Hollande',null, 21, null),(3,'20 Mai 2016',null, 21, null),(4,'Match Lion 2016',null, 21, null);


insert into LignePerms value (1, '2016-10-01', 1);

insert into LignePerms_Utilisateurs values (1, '007E', '12:00:00', '20:00:00'),(1, '007G', '20:00:00', '22:00:00');

insert into LigneAstrs values (1,'2016-10-01','2016-10-03',1,'007E',65,21,15),
(2,'2016-10-10','2016-10-13',1,'007E',65,21,15);




