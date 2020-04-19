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
INSERT INTO Band VALUES ( 11, 'Green Dragons', 'Heavy Rock', 222);
INSERT INTO Band VALUES ( 22, 'Wellies', 'Easy Listening', 333);
INSERT INTO Band VALUES ( 33, 'Lazy Dancers', 'Garage', 111);
INSERT INTO Band VALUES ( 44, 'The Vultures', 'Easy Listening', 333);
INSERT INTO Band VALUES ( 55, 'Future Explosion', 'Heavy Rock', 444);
INSERT INTO Band VALUES ( 66, 'Killers', 'Heavy Rock', 555);

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
INSERT INTO Member VALUES ( 1111, 'Ms', 'Helen', 'Miranda', 'Lead Guitar', 11, 'Active');
INSERT INTO Member VALUES ( 1234, 'Mr', 'Jose', 'Jose Alves', 'Bass Guitar', 11, 'Active');
INSERT INTO Member VALUES ( 1333, 'Dr', 'Vito', 'Gelato', 'Voice Coach', 22, 'Active');
INSERT INTO Member VALUES ( 1344, 'Dr', 'Guy', 'Redmond', 'Make-up', 66, 'Active');
INSERT INTO Member VALUES ( 1444, 'Ms', 'Maria', 'Partou', 'Vocals', 22, 'Active');
INSERT INTO Member VALUES ( 2111, 'Ms', 'Lindsay', 'White', 'Dancer', 55, 'Cancelled');
INSERT INTO Member VALUES ( 4545, 'Ms', 'Lee', 'Ping', 'Lead Guitar', 33, 'Active');
INSERT INTO Member VALUES ( 5665, 'Ms', 'Sing', 'Song', 'Vocals', 44, 'Active');
INSERT INTO Member VALUES ( 2121, 'Mr', 'David', 'Wikinson', 'Backing', 44, 'Cancelled');
INSERT INTO Member VALUES ( 3333, 'Ms', 'Olenka', 'Sama', 'Sound Tech', 66, 'Active');
INSERT INTO Member VALUES ( 7271, 'Mr', 'Dan', 'Dreary', 'Make-up', 22, 'Active');
INSERT INTO Member VALUES ( 5555, 'Mr', 'Tom', 'Tumbling', 'Drums', 22, 'Active');
INSERT INTO Member VALUES ( 6666, 'Mr', 'Fingers', 'Malone', 'Guitar', 22, 'Active');
INSERT INTO Member VALUES ( 2345, 'Mr', 'Lai', 'Zee', 'Roadie', 22, 'Active');

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
