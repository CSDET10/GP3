Green Dragons-- .=========================.
-- | DATA INPUT              |
-- :=========================:
-- | Agent                   |
-- | Band                    |
-- | Stage                   |
-- | Member                  |
-- | Performance             |
--  =========================


INSERT INTO Agent VALUES ( 111, 'John', 'Ripov', '0203 4567890');
INSERT INTO Agent VALUES ( 222, 'Mary', 'Dancing', '0765 4320243');
INSERT INTO Agent VALUES ( 333, 'Anil', 'Rating', '0121 2130321');
INSERT INTO Agent VALUES ( 444, 'Lim', 'Popo', '0911 2345432');
INSERT INTO Agent VALUES ( 555, 'Mary', 'Ripov', '0203 4567890');


INSERT INTO Band VALUES ( 'Green Dragons', '1', 222);
INSERT INTO Band VALUES ( 'Wellies', '3', 333);
INSERT INTO Band VALUES ( 'Lazy Dancers', '2', 111);
INSERT INTO Band VALUES ( 'The Vultures', '3', 333);
INSERT INTO Band VALUES ( 'Future Explosion', '1', 444);
INSERT INTO Band VALUES ( 'Killers', '1', 555);


INSERT INTO Stage VALUES ( 1, 'John Peel', 20);
INSERT INTO Stage VALUES ( 2, 'The Bowl', 10);
INSERT INTO Stage VALUES ( 3, 'Main', 30);
INSERT INTO Stage VALUES ( 4, 'The Oasis', 20);
INSERT INTO Stage VALUES ( 5, 'Jam Session', 3);
INSERT INTO Stage VALUES ( 6, 'Premium', 50);


INSERT INTO Member VALUES ( 1111, '2', 'Helen', 'Miranda', '8', 'Green Dragons', '1');
INSERT INTO Member VALUES ( 1234, '1', 'Jose', 'Jose Alves', '10', 'Green Dragons', '1');
INSERT INTO Member VALUES ( 1333, '3', 'Vito', 'Gelato', '2', 'Wellies', '1');
INSERT INTO Member VALUES ( 1344, '3', 'Guy', 'Redmond', '3', 'Killers', '1');
INSERT INTO Member VALUES ( 1444, '2', 'Maria', 'Partou', '1', 'Wellies', '1');
INSERT INTO Member VALUES ( 2111, '2', 'Lindsay', 'White', '11', 'Future Explosion', '2');
INSERT INTO Member VALUES ( 4545, '2', 'Lee', 'Ping', '8', 'Lazy Dancers', '1');
INSERT INTO Member VALUES ( 5665, '2', 'Sing', 'Song', '1', 'The Vultures', '1');
INSERT INTO Member VALUES ( 2121, '1', 'David', 'Wikinson', '7', 'The Vultures', '2');
INSERT INTO Member VALUES ( 3333, '2', 'Olenka', 'Sama', '9', 'Killers', '1');
INSERT INTO Member VALUES ( 7271, '1', 'Dan', 'Dreary', '3', 'Wellies', '1');
INSERT INTO Member VALUES ( 5555, '1', 'Tom', 'Tumbling', '4', 'Wellies', '1');
INSERT INTO Member VALUES ( 6666, '1', 'Fingers', 'Malone', '5', 'Wellies', '1');
INSERT INTO Member VALUES ( 2345, '1', 'Lai', 'Zee', '6', 'Wellies', '1');


INSERT INTO Performance VALUES ( 1, 1, '2020/06/25', '10:00', 'Wellies');
INSERT INTO Performance VALUES ( 2, 2, '2020/06/25', '18:00', 'Wellies');
INSERT INTO Performance VALUES ( 3, 1, '2020/06/27', '12:00', 'The Vultures');
INSERT INTO Performance VALUES ( 4, 3, '2020/06/26', '18:00', 'Wellies');
INSERT INTO Performance VALUES ( 5, 3, '2020/06/26', '15:00', 'The Vultures');
INSERT INTO Performance VALUES ( 6, 1, '2020/06/25', '13:00', 'Killers');
INSERT INTO Performance VALUES ( 7, 5, '2020/06/26', '13:00', 'Wellies');
INSERT INTO Performance VALUES ( 8, 6, '2020/06/27', '13:00', 'The Vultures');
INSERT INTO Performance VALUES ( 9, 2, '2020/06/26', '13:00', 'Killers');
INSERT INTO Performance VALUES ( 10, 4, '2020/06/25', '16:00', 'Green Dragons');
INSERT INTO Performance VALUES ( 11, 1, '2020/06/27', '14:00', 'Wellies');
INSERT INTO Performance VALUES ( 12, 4, '2020/06/25', '17:00', 'Lazy Dancers');
INSERT INTO Performance VALUES ( 13, 6, '2020/06/26', '18:00', 'Green Dragons');
INSERT INTO Performance VALUES ( 14, 4, '2020/06/26', '19:00', 'Future Explosion');
