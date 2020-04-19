-- .=========================.
-- | DATA INPUT              |
-- :=========================:
-- | Agent                   |
-- | Band                    |
-- | Stage                   |
-- | Member                  |
-- | Performance             |
--  =========================


-- Agent
INSERT INTO Agent VALUES ( 111, 'John', 'Ripov', '0203 4567890');
INSERT INTO Agent VALUES ( 222, 'Mary', 'Dancing', '0765 4320243');
INSERT INTO Agent VALUES ( 333, 'Anil', 'Rating', '0121 2130321');
INSERT INTO Agent VALUES ( 444, 'Lim', 'Popo', '0911 2345432');
INSERT INTO Agent VALUES ( 555, 'Mary', 'Ripov', '0203 4567890');

-- Band
INSERT INTO Band VALUES ( 11,'Green Dragons', '1', 222);
INSERT INTO Band VALUES ( 22,'Wellies', '3', 333);
INSERT INTO Band VALUES ( 33,'Lazy Dancers', '2', 111);
INSERT INTO Band VALUES ( 44,'The Vultures', '3', 333);
INSERT INTO Band VALUES ( 55,'Future Explosion', '1', 444);
INSERT INTO Band VALUES ( 66,'Killers', '1', 555);

-- Crud_users
INSERT INTO Crud_users VALUES ( 1, 'admin', 'admin', 0);
INSERT INTO Crud_users VALUES ( 2, 'BMT', 'BMT', 1);
INSERT INTO Crud_users VALUES ( 3, 'SecurityOfficer', 'SecurityOfficer', 2);
INSERT INTO Crud_users VALUES ( 4, 'SecurityGuard', 'SecurityGuard', 3);

-- Stage
INSERT INTO Stage VALUES ( 1, 'John Peel', 20, 0);
INSERT INTO Stage VALUES ( 2, 'The Bowl', 10, 0);
INSERT INTO Stage VALUES ( 3, 'Main', 30,0);
INSERT INTO Stage VALUES ( 4, 'The Oasis', 20, 0);
INSERT INTO Stage VALUES ( 5, 'Jam Session', 3, 0);
INSERT INTO Stage VALUES ( 6, 'Premium', 50, 0);

-- Member


INSERT INTO Member VALUES ( 1111, '2', 'Helen', 'Miranda', '8', 11, '1');
INSERT INTO Member VALUES ( 1234, '1', 'Jose', 'Jose Alves', '10', 11, '1');
INSERT INTO Member VALUES ( 1333, '3', 'Vito', 'Gelato', '2', 22, '1');
INSERT INTO Member VALUES ( 1344, '3', 'Guy', 'Redmond', '3', 66, '1');
INSERT INTO Member VALUES ( 1444, '2', 'Maria', 'Partou', '1', 22, '1');
INSERT INTO Member VALUES ( 2111, '2', 'Lindsay', 'White', '11', 55, '2');
INSERT INTO Member VALUES ( 4545, '2', 'Lee', 'Ping', '8', 33, '1');
INSERT INTO Member VALUES ( 5665, '2', 'Sing', 'Song', '1', 44, '1');
INSERT INTO Member VALUES ( 2121, '1', 'David', 'Wikinson', '7', 44, '2');
INSERT INTO Member VALUES ( 3333, '2', 'Olenka', 'Sama', '9', 66, '1');
INSERT INTO Member VALUES ( 7271, '1', 'Dan', 'Dreary', '3', 22, '1');
INSERT INTO Member VALUES ( 5555, '1', 'Tom', 'Tumbling', '4', 22, '1');
INSERT INTO Member VALUES ( 6666, '1', 'Fingers', 'Malone', '5', 22, '1');
INSERT INTO Member VALUES ( 2345, '1', 'Lai', 'Zee', '6', 22, '1');

-- Pertformance
INSERT INTO Performance VALUES ( 1, 1, '2020/06/25', '10:00', 22);
INSERT INTO Performance VALUES ( 2, 2, '2020/06/25', '18:00', 22);
INSERT INTO Performance VALUES ( 3, 1, '2020/06/27', '12:00', 44);
INSERT INTO Performance VALUES ( 4, 3, '2020/06/26', '18:00', 22);
INSERT INTO Performance VALUES ( 5, 3, '2020/06/26', '15:00', 44);
INSERT INTO Performance VALUES ( 6, 1, '2020/06/25', '13:00', 66);
INSERT INTO Performance VALUES ( 7, 5, '2020/06/26', '13:00', 22);
INSERT INTO Performance VALUES ( 8, 6, '2020/06/27', '13:00', 44);
INSERT INTO Performance VALUES ( 9, 2, '2020/06/26', '13:00', 66);
INSERT INTO Performance VALUES ( 10, 4, '2020/06/25', '16:00', 11);
INSERT INTO Performance VALUES ( 11, 1, '2020/06/27', '14:00', 22);
INSERT INTO Performance VALUES ( 12, 4, '2020/06/25', '17:00', 33);
INSERT INTO Performance VALUES ( 13, 6, '2020/06/26', '18:00', 11);
INSERT INTO Performance VALUES ( 14, 4, '2020/06/26', '19:00', 55);
