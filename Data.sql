-- .=========================.
-- | DATA INPUT              |
-- :=========================:
-- | Agent                   |
-- | Band                    |
-- | Stage                   |
-- | Members                 |
-- | Performance             |
--  =========================


INSERT INTO Agent VALUES ( 111, 'John', 'Ripov', '0203 4567890');
INSERT INTO Agent VALUES ( 222, 'Mary', 'Dancing', '0765 4320243');
INSERT INTO Agent VALUES ( 333, 'Anil', 'Rating', '0121 2130321');
INSERT INTO Agent VALUES ( 444, 'Lim', 'Popo', '0911 2345432');
INSERT INTO Agent VALUES ( 555, 'Mary', 'Ripov', '0203 4567890');


INSERT INTO Band VALUES ( 'Green Dragons', 'Heavy Rock', 'Mary Dancing');
INSERT INTO Band VALUES ( 'Wellies', 'Easy Listening', 'Anil Rating');
INSERT INTO Band VALUES ( 'Lazy Dancers', 'Garage', 'John Ripov');
INSERT INTO Band VALUES ( 'The Vultures', 'Easy Listening', 'Anil Rating');
INSERT INTO Band VALUES ( 'Future Explosion', 'Heavy Rock', 'Lim Popo');
INSERT INTO Band VALUES ( 'Killers', 'Heavy Rock', 'Mary Ripov');


INSERT INTO Stage VALUES ( 1, 'John Peel', 20);
INSERT INTO Stage VALUES ( 2, 'The Bowl', 10);
INSERT INTO Stage VALUES ( 3, 'Main', 30);
INSERT INTO Stage VALUES ( 4, 'The Oasis', 20);
INSERT INTO Stage VALUES ( 5, 'Jam Session', 3);
INSERT INTO Stage VALUES ( 6, 'Premium', 50);


INSERT INTO Members VALUES ( 1111, 'Ms', 'Helen', 'Miranda', TO_DATE('21/12/1987', 'DD/MM/YYYY'), 'Lead Guitar', 'Green Dragons', 'Active');
INSERT INTO Members VALUES ( 1234, 'Mr', 'Jose', 'Jose Alves', TO_DATE('27/12/1977', 'DD/MM/YYYY'), 'Bass Guitar', 'Green Dragons', 'Active');
INSERT INTO Members VALUES ( 1333, 'Dr', 'Vito', 'Gelato', TO_DATE('06/01/1998', 'DD/MM/YYYY'), 'Voice Coach', 'Wellies', 'Active');
INSERT INTO Members VALUES ( 1344, 'Dr', 'Guy', 'Redmond', TO_DATE('09/02/1988', 'DD/MM/YYYY'), 'Make-up', 'Killers', 'Active');
INSERT INTO Members VALUES ( 1444, 'Ms', 'Maria', 'Partou', TO_DATE('11/03/1994', 'DD/MM/YYYY'), 'Vocals', 'Wellies', 'Active');
INSERT INTO Members VALUES ( 2111, 'Ms', 'Lindsay', 'White', TO_DATE('16/03/1999', 'DD/MM/YYYY'), 'Dancer', 'Future Explosion', 'Cancelled');
INSERT INTO Members VALUES ( 4545, 'Ms', 'Lee', 'Ping', TO_DATE('16/03/1999', 'DD/MM/YYYY'), 'Lead Guitar', 'Lazy Dancers', 'Active');
INSERT INTO Members VALUES ( 5665, 'Ms', 'Sing', 'Song', TO_DATE('15/07/1983', 'DD/MM/YYYY'), 'Vocals', 'The Vultures', 'Active');
INSERT INTO Members VALUES ( 2121, 'Mr', 'David', 'Wikinson', TO_DATE('18/03/2001', 'DD/MM/YYYY'), 'Backing', 'The Vultures', 'Cancelled');
INSERT INTO Members VALUES ( 3333, 'Ms', 'Olenka', 'Sama', TO_DATE('12/12/1977', 'DD/MM/YYYY'), 'Sound Tech', 'Killers', 'Active');
INSERT INTO Members VALUES ( 7271, 'Mr', 'Dan', 'Dreary', TO_DATE('12/12/1978', 'DD/MM/YYYY'), 'Make up', 'Wellies', 'Active');
INSERT INTO Members VALUES ( 5555, 'Mr', 'Tom', 'Tumbling', TO_DATE('13/07/2002', 'DD/MM/YYYY'), 'Drums', 'Wellies', 'Active');
INSERT INTO Members VALUES ( 6666, 'Mr', 'Fingers', 'Malone', TO_DATE('14/09/1987', 'DD/MM/YYYY'), 'Guitar', 'Wellies', 'Active');
INSERT INTO Members VALUES ( 1234, 'Mr', 'Lai', 'Zee', TO_DATE('14/09/1979', 'DD/MM/YYYY'), 'Roadie', 'Wellies', 'Active');


INSERT INTO Performance VALUES ( 1, 1, '25/06/2020 10:00:00', 'Wellies');
INSERT INTO Performance VALUES ( 2, 2, '25/06/2020 18:00:00', 'Wellies');
INSERT INTO Performance VALUES ( 3, 1, '27/06/2020 12:00:00', 'Vultures');
INSERT INTO Performance VALUES ( 4, 3, '26/06/2020 18:00:00', 'Wellies');
INSERT INTO Performance VALUES ( 5, 3, '26/06/2020 15:00:00', 'Vultures');
INSERT INTO Performance VALUES ( 6, 1, '25/06/2020 13:00:00', 'Killers');
INSERT INTO Performance VALUES ( 7, 5, '26/06/2020 13:00:00', 'Wellies');
INSERT INTO Performance VALUES ( 8, 6, '27/06/2020 13:00:00', 'Vultures');
INSERT INTO Performance VALUES ( 9, 2, '26/06/2020 13:00:00', 'Killers');
INSERT INTO Performance VALUES ( 10, 4, '25/06/2020 16:00:00', 'Dragons');
INSERT INTO Performance VALUES ( 11, 1, '27/06/2020 14:00:00', 'Wellies');
INSERT INTO Performance VALUES ( 12, 4, '25/06/2020 17:00:00', 'Dancers');
INSERT INTO Performance VALUES ( 13, 6, '26/06/2020 18:00:00', 'Dragons');
INSERT INTO Performance VALUES ( 14, 4, '26/06/2020 19:00:00', '');
