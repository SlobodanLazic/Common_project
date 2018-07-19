-- SMER
USE systemdb;

INSERT INTO SMER 
VALUES
	('1','PHP Web Development'),
	('2','JAVA Development'),
	('3','Software Development'),
	('4','Microsoft Web Development'),
	('5','Microsoft Windows Development'),
	('6','Software Engineering');

-- OBLAST	
USE systemdb;

INSERT INTO GODINA 
VALUES ('1','2017/2018');


SELECT p.ID_PRIJAVA,
		p.NAZIV_PRIJAVE,
        p.OD_KOG_DATUMA,
        p. DO_KOG_DATUMA,
        s.ID_SMER,
        s.NAZIV_SMERA,
		ps.ID_STATUS,
        ps.NAZIV,
        ps.OPIS
FROM PRIJAVA AS p
			JOIN PRIJAVA_STATUS AS ps ON ps.ID_STATUS = p.ID_STATUS
			JOIN SMER_PRIJAVA AS sm ON sm.ID_PRIJAVA = p.ID_PRIJAVA
            JOIN SMER AS s ON sm.ID_SMER = s.ID_SMER;
