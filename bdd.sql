DROP TABLE  IF EXISTS tr_personne_per CASCADE;
DROP TABLE  IF EXISTS tr_service_ser CASCADE;
DROP TABLE  IF EXISTS tr_etudiant_etu CASCADE;
DROP TABLE  IF EXISTS tr_professeur_pro CASCADE;
DROP TABLE  IF EXISTS tr_demande_dem CASCADE;
DROP TABLE  IF EXISTS tr_fichier_fic CASCADE;
DROP TABLE  IF EXISTS tj_actetu CASCADE;
DROP TABLE  IF EXISTS tj_actpro CASCADE;
DROP TABLE  IF EXISTS tr_activite_act CASCADE;

CREATE TABLE tr_personne_per (
	per_id BIGSERIAL ,
	per_user VARCHAR(100),
	per_password VARCHAR(1000),
	per_nom VARCHAR(100),
	per_mail VARCHAR(500),
	CONSTRAINT pk_per PRIMARY KEY (per_id),
	CONSTRAINT uq_per_user_password UNIQUE (per_user,per_password)
);

CREATE TABLE tr_service_ser (
	ser_id BIGSERIAL,
	CONSTRAINT pk_ser PRIMARY KEY (ser_id)
) INHERITS (tr_personne_per);

CREATE TABLE tr_etudiant_etu (
	etu_id BIGSERIAL,
	CONSTRAINT pk_etu PRIMARY KEY (etu_id)
) INHERITS (tr_personne_per);

CREATE TABLE tr_professeur_pro (
	pro_id BIGSERIAL,
	CONSTRAINT pk_pro PRIMARY KEY (pro_id)
) INHERITS (tr_personne_per);


CREATE TABLE tr_demande_dem (
	dem_id BIGSERIAL,
	dem_type VARCHAR(50),
	dem_titre VARCHAR(100),
	dem_message TEXT,
	per_id BIGINT,
	CONSTRAINT pk_dem PRIMARY KEY (dem_id)
);

CREATE TABLE tr_fichier_fic (
	fic_id BIGSERIAL,
	fic_data BYTEA,
	fic_nom VARCHAR(100),
	dem_id BIGINT,
	CONSTRAINT pk_fic PRIMARY KEY (fic_id)
);

CREATE TABLE tj_actetu (
	act_id BIGINT,
	etu_id BIGINT,
	CONSTRAINT pk_actetu PRIMARY KEY (act_id,etu_id)
);

CREATE TABLE tj_actpro (
	pro_id BIGINT,
	act_id BIGINT,
	CONSTRAINT pk_actepro PRIMARY KEY (pro_id,act_id)
);

CREATE TABLE tr_activite_act (
	act_id BIGSERIAL,
	act_nom VARCHAR(500),
	act_type VARCHAR(50),
	CONSTRAINT pk_act PRIMARY KEY (act_id)
);

ALTER TABLE tr_fichier_fic
ADD CONSTRAINT fk_fic_dem FOREIGN KEY (dem_id) REFERENCES tr_demande_dem (dem_id);
ALTER TABLE tr_demande_dem
ADD CONSTRAINT fk_dem_per FOREIGN KEY (per_id) REFERENCES tr_personne_per (per_id);
ALTER TABLE tj_actpro 
ADD CONSTRAINT fk_actpro_pro FOREIGN KEY (pro_id) REFERENCES tr_professeur_pro (pro_id);
ALTER TABLE tj_actpro 
ADD CONSTRAINT fk_actpro_act FOREIGN KEY (act_id) REFERENCES tr_activite_act (act_id);
ALTER TABLE tj_actetu 
ADD CONSTRAINT fk_actetu_pro FOREIGN KEY (etu_id) REFERENCES tr_etudiant_etu (etu_id);
ALTER TABLE tj_actetu 
ADD CONSTRAINT fk_actetu_act FOREIGN KEY (act_id) REFERENCES tr_activite_act (act_id);
ALTER TABLE tr_demande_dem 
ADD CONSTRAINT ck_dem_type CHECK (dem_type IN ('proposition', 'travaux', 'commande'));

INSERT INTO tr_etudiant_etu(per_user,per_password,per_nom,per_mail) VALUES('etudiant1user','etudiant1password','etudiant1nom','etudiant1mail');
INSERT INTO tr_etudiant_etu(per_user,per_password,per_nom,per_mail) VALUES('etudiant2user','etudiant2password','etudiant2nom','etudiant2mail');
INSERT INTO tr_etudiant_etu(per_user,per_password,per_nom,per_mail) VALUES('etudiant3user','etudiant3password','etudiant3nom','etudiant3mail');
INSERT INTO tr_professeur_pro(per_user,per_password,per_nom,per_mail) VALUES('professeur1user','professeur1password','professeur1nom','professeur1mail');
INSERT INTO tr_professeur_pro(per_user,per_password,per_nom,per_mail) VALUES('professeur2user','professeur2password','professeur2nom','professeur2mail');
INSERT INTO tr_service_ser(per_user,per_password,per_nom,per_mail) VALUES('service1user','service1password','service1nom','service1mail');
INSERT INTO tr_activite_act(act_nom,act_type) VALUES('activite1nom','TP');
INSERT INTO tr_activite_act(act_nom,act_type) VALUES('activite2nom','TD');
INSERT INTO tr_activite_act(act_nom,act_type) VALUES('activite3nom','CM');
INSERT INTO tr_activite_act(act_nom,act_type) VALUES('activite4nom','CM');
INSERT INTO tr_activite_act(act_nom,act_type) VALUES('activite3nom','CM');
INSERT INTO tr_demande_dem(dem_type,dem_titre,dem_message) VALUES('proposition','demande1title','demande1message');
INSERT INTO tr_demande_dem(dem_type,dem_titre,dem_message) VALUES('travaux','demande2title','demande1message');
INSERT INTO tr_demande_dem(dem_type,dem_titre,dem_message) VALUES('commande','demande3title','demande3message');
