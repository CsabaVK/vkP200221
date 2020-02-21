CREATE TABLE `users`(
    `id` smallint UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `address` varchar(100) NOT NULL,
    `bornAt` date DEFAULT '1970-01-01'
)DEFAULT CHARSET = UTF8;

INSERT INTO `users` (`name`, `address`, `email`,`bornAt`) VALUES
('Cormer Nor', 'An Der Bundesstrasse 81 3062 HINTERHOLZ', 'cormernor@gmail.com', '1998-03-12'),
('Athraedax Ryas','Gleichenberger Strasse 38 4264 GRÜNBACH ', 'ryasathraedax@gmail.com','1989-02-03'),
('Rognus Goragar','Favoritenstrasse 32 2100 KORNEUBURG','rognus_goragar@outlook.com', '1997-05-23'),
('Castor Kell','Bachloh 68 4144 WEBERSCHLAG','castor.kell@k.edu', '2003-12-12'),
('Cadhlion Elonta','Prager Strasse 61 4693 ROITH','elontacadhlion@k.edu', '2004-01-23'),
('Zeidar Mel','Hauptplatz 56 9131 OBERMIEGER','zeidaaa01@gmail.com', '2007.03.03'),
('Aldvin Irliastien','Stollenstrasse 14 3383 OBER-THURNHOFEN','aldvin.irliastien@k.edu','2005-09-01');
