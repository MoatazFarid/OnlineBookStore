-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2015 at 05:53 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinebooky`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `isbn` char(10) NOT NULL DEFAULT '',
  `author` varchar(100) NOT NULL,
  `title` varchar(128) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `subject` varchar(30) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `author`, `title`, `price`, `subject`) VALUES
('0030059380', 'Douglas A. Skooq', 'Fundamentals of Analytical Chemistry', '118.50', 'SCIENCE'),
('0030303370', 'William Rife', 'Essentials of Chemistry', '79.55', 'SCIENCE'),
('0030615372', 'Colin M. Turnbull', 'The Mbuti Pygmies', '15.00', 'GENERAL'),
('0060287659', 'Geraldine McCaughrean', 'The Stones Are Hatching', '17.00', 'CHILDREN'),
('0060393645', 'Marilu Henner and Lorin Henner', 'Healthy Life Kitchen', '20.80', 'GENERAL'),
('0060930497', 'Kenneth R. Miller', 'Finding Darwin God:  Scientists Search for Common Ground', '58.95', 'SCIENCE'),
('0060959290', 'Colin Thubron', 'Among the Russians', '11.20', 'GENERAL'),
('0070121430', 'Thomas H. Cormen, Charles E. Leiserson, and Ronald L. Rivest', ' Introduction to Algorithms', '69.95', 'COMPUTER SCIENCE'),
('0070349096', 'Henry Z. Kister', 'Distillation Design', '79.95', 'SCIENCE'),
('0070498415', 'Robert H. Perry', 'Perrys Chemical Engineers Handbook', '150.00', 'SCIENCE'),
('0070571864', 'Gershon J. Shugar', 'Chemical Technicians Ready Reference Handbook', '89.95', 'SCIENCE'),
('0071354190', 'Peter Lane Taylor', 'Science at the Extreme: Scientists on the Cutting Edge of Discovery', '29.95', 'SCIENCE'),
('0072127317', 'Blake Schwendiman', 'PHP 4 Developers Guide', '47.99', 'COMPUTER SCIENCE'),
('0072127481', 'Joel Scambray', 'HACKING EXPOSED: NETWORK SECURITY SECRETS AND SOLUTIONS', '31.99', 'COMPUTER SCIENCE'),
('0078823927', 'Herb Schildt', 'Teach yourself C++', '27.99', 'COMPUTER SCIENCE'),
('0078823978', 'Thomas Powell', 'The complete reference HTML', '39.99', 'COMPUTER SCIENCE'),
('0120594757', 'Neal G. Anderson', 'Practical Process Research and  Development', '89.95', 'SCIENCE'),
('0120848104', 'Les Beletsky', 'Costa Rica: The Ecotraveller Wildlife Guide', '30.00', 'GENERAL'),
('0125535600', 'GM Phillips and PJ Taylor', 'Theory and Applications of Numerical Analysis', '75.25', 'SCIENCE'),
('0130264857', 'Jan Fair and Sadie Bragg', 'Algebra 1', '54.80', 'SCIENCE'),
('0130273635', 'Bruce Eckel', 'Thinking in Java', '35.99', 'COMPUTER SCIENCE'),
('0130819735', 'Jame Laudon', 'Essentials of management', '75.00', 'GENERAL'),
('0134897250', 'Bernd Bruegge and Alan H. Dutoit', 'Object Oriented Software Engineering, Conquering Complex and Changing Systems', '45.00', 'COMPUTER SCIENCE'),
('0136603904', 'Irvine, Kip R.', 'Assembly Language for Intel-Based Computers', '72.95', 'COMPUTER SCIENCE'),
('0137566107', 'Peter Abel', 'IBM PC Assembly Language and Programming, Fourth Edition', '63.95', 'COMPUTER SCIENCE'),
('0138613370', 'Jeffrey D. Ullman', 'A First Course in Database Systems', '65.00', 'COMPUTER SCIENCE'),
('014051452X', 'Richard Cook', 'The Penguin Guide to Jazz on C.d (Penguin Guide to Jazz on Cd, 5th Ed)', '19.85', 'GENERAL'),
('0151004714', 'Claire Messud', 'The Last Life', '24.00', 'FICTION'),
('0156007088', 'John Lewis', 'Walking with the Wind', '15.00', 'GENERAL'),
('0156007754', 'Jose Saramago, Giovanni Pontiero', 'Blindness', '14.00', 'FICTION'),
('0198503652', 'Susan J. Blackmore', 'The Meme Machine', '20.00', 'FICTION'),
('0201379260', 'Nicolai M. Josuttis', 'The C++ Standard Library : A Tutorial and Reference', '69.95', 'COMPUTER SCIENCE'),
('0201612585', 'Rajshekhar Sunderraman', 'Oracle8 Programming a primer', '29.99', 'COMPUTER SCIENCE'),
('0201615622', 'Herb Sutter', 'Exceptional C++: 47 Engineering Puzzles, Programming Problems', '59.95', 'COMPUTER SCIENCE'),
('0201615711', 'Lincoln D Stein', 'Network Programming with Perl', '39.95', 'COMPUTER SCIENCE'),
('020163371X', 'Scott Meyers', 'More Effective C++ : 35 New Ways to Improve Your Programs and Designs ', '39.95', 'COMPUTER SCIENCE'),
('0201634422', 'S Keshav', 'An Engineering Approach to computer networks', '49.95', 'COMPUTER SCIENCE'),
('020165783X', 'Martin Fowler with Kendall Scott', 'UML Distilled, Second Edition', '29.95', 'COMPUTER SCIENCE'),
('0201700735', 'Bjarne Stroustrup', 'The C++ Programming Language Special Edition', '59.95', 'COMPUTER SCIENCE'),
('0201709287', 'C.J. Date, Hugh Darwen', 'Foundation for Future Database Systems: The Third Manifesto', '39.95', 'COMPUTER SCIENCE'),
('0256228779', 'Gilbert churchill, Paul Petter', 'Marketing: Creating Value for Customers', '60.25', 'GENERAL'),
('0262041642', 'Marco Dorigo, Marco Colombetti', 'Robot Shaping: An Experiment in Behavior Engineering', '42.00', 'COMPUTER SCIENCE'),
('0262133822', 'Faith D Aluisio', 'Robo Sapiens: Evolution of a New Species', '23.96', 'COMPUTER SCIENCE'),
('0262181916', 'Santiago. Ramon Y Cajal', 'Advice for a Young Investigator', '21.23', 'SCIENCE'),
('0312135033', 'Carolly Erickson', 'Great Catherine', '13.56', 'GENERAL'),
('0312965095', 'Kathleen Kane', 'This Time for Keeps', '5.99', 'FICTION'),
('0314129499', 'Welch Gruhlt', 'American Government', '41.99', 'GENERAL'),
('0316154075', 'Michael Connelly', 'A Darkness More than Night', '15.57', 'FICTION'),
('0316695262', 'George P. Pelecanos', 'Right as Rain', '19.96', 'FICTION'),
('0316769487', 'Salinger, J.D.', 'Catcher in the Rye', '5.99', 'FICTION'),
('0345298063', 'Robert K Massie', 'Peter the Great : His Life and World', '11.20', 'GENERAL'),
('0345313860', 'Anne Rice', 'The vampire lestat', '6.99', 'FICTION'),
('0345337662', 'Anne Rice', 'Interview with a vampire', '6.99', 'FICTION'),
('0345350499', 'Marion Zimmer Bradley', 'The mists of avalon', '12.95', 'FICTION'),
('0345370775', 'Michael Crichton', 'Jurassic Park', '6.99', 'FICTION'),
('0345377648', 'Anne Rice', 'Lasher', '14.00', 'FICTION'),
('0345384466', 'Anne Rice', 'The Witching Hour', '7.99', 'FICTION'),
('034538475X', 'Anne Rice', 'The tale of the body thief', '6.99', 'FICTION'),
('0345417623', 'Michael Crichton', 'Timeline', '7.99', 'FICTION'),
('0345419758', 'Mass Market', 'Air Force One Has Landed', '5.99', 'FICTION'),
('0345438310', 'Robert K Massie', 'Nicholas and Alexandra', '14.40', 'GENERAL'),
('0374141231', 'Ian Wilmut, Colin Tudge, Keith Campbell ', 'The Second Creation: Dolly and the Age of Biological Control', '21.60', 'FICTION'),
('0375400818', 'Robert Kimball ', 'Reading Lyrics', '31.60', 'GENERAL'),
('037541164X', 'Gurcharan Das', 'India Unbound', '5.00', 'GENERAL'),
('0375502025', 'Tom Brokaw', 'The Greatest Generation', '10.00', 'GENERAL'),
('0375810609', 'Jean DE Brunhoff', 'Bonjour Babar', '29.95', 'CHILDREN'),
('038071115X', 'Tracy Kidder', 'The Soul of a New Machine', '12.50', 'FICTION'),
('0385326653', 'David Almond', 'Kits Wilderness', '56.00', 'CHILDREN'),
('0385479565', 'Richard Preston', 'The Hot Zone', '7.99', 'SCIENCE'),
('0387987010', 'Peter Douglas Ward', 'Rare Earth: Why Complex Life is Uncommon in the Universe', '34.34', 'SCIENCE'),
('0393314251', 'Stephen Jay Gould', 'The Mismeasure of Man', '15.95', 'FICTION'),
('0393316009', 'Andrea Barrett', 'Ship Fever', '12.00', 'FICTION'),
('0395851580', 'James Marshall', 'George and Martha the complete stories of two best friends', '25.00', 'CHILDREN'),
('039914563X', 'Clancy, Tom', 'Bear and the Dragon, The', '28.95', 'FICTION'),
('0399146652', 'Lilian Jackson Braun', 'The Cat Who Smelled a Rat ', '14.37', 'FICTION'),
('0399147020', 'Nevada Barr', 'Blood Lure ', '14.97', 'FICTION'),
('0399501487', 'Golding, William Gerald', 'Lord of the Flies: A Novel', '6.95', 'FICTION'),
('042510107X', 'Tom Clancy', 'Red Storm Rising', '7.99', 'FICTION'),
('0425133540', 'Tom Clancy', 'The Sum of All Fears', '7.99', 'FICTION'),
('0425143325', 'Tom Clancy', 'Without Remorse', '7.99', 'FICTION'),
('0425147584', 'Tom Clancy', 'Debt Of Honor', '7.99', 'FICTION'),
('0439064864', 'J. K. Rowling', 'Harry Potter and the chambers of secrets', '17.95', 'CHILDREN'),
('0439136350', 'J. K. Rowling', 'Harry Potter and the chamber of secrets', '19.95', 'CHILDREN'),
('0439139597', 'J. K. Rowling', 'Harry Potter and the goblet of fire', '25.95', 'CHILDREN'),
('0440413729', 'Ruth White', 'Belle Prater''s Boy', '4.00', 'CHILDREN'),
('0446310783', 'Lee, Harper', 'To Kill a Mockingbird', '6.99', 'FICTION'),
('0449202496', 'Erich Maria Remarque', 'All Quiet on the Western Front', '2.95', 'FICTION'),
('0449911942', 'John Updike', 'Rabbit at Rest', '12.95', 'FICTION'),
('0452272971', 'Sebastien Japrisot, Linda Coverdale', 'A Very Long Engagement', '14.00', 'FICTION'),
('0465041752', 'Frans de Waal', 'The Ape and the Sushi Master', '20.80', 'FICTION'),
('0471105597', 'Halliday, Resnick, and Walker', 'Fundamentals of Physics Extended', '99.95', 'SCIENCE'),
('0471135615', 'Robert Zubrin', 'Islands In the Sky: Bold New Ideas for Colonizing Space', '13.45', 'FICTION'),
('0471169196', 'Kimmel Weygandt', 'Financial Accounting: tools for business decision making', '81.99', 'GENERAL'),
('0471534781', 'Richard M. Felder', 'Elementary Principles of Chemical Processes', '111.95', 'SCIENCE'),
('0471587192', 'Garret J.Etgen', 'SALAS and HILLES CALCULUS', '84.50', 'SCIENCE'),
('0471597619', 'Gary D. Christian', 'Analytical Chemistry', '103.00', 'SCIENCE'),
('0505523078', 'Ann Lawrence', 'Virtual Heaven', '5.99', 'FICTION'),
('0517707950', 'Esquivel, Laura', 'The Law of Love', '79.98', 'ROMANCE'),
('0528838180', 'Ran McNally', 'Coast-to-Coast Games', '3.95', 'CHILDREN'),
('0531164497', 'Ann O. Squire', 'Spiders of North America', '6.95', 'SCIENCE'),
('0534368018', 'Bronson, Gary J.', 'A First Book of C++: From Here to There', '60.95', 'COMPUTER SCIENCE'),
('0534944469', 'Susanna S. Epp', 'Discrete Mathematics with Applications', '64.65', 'SCIENCE'),
('0553102370', 'Michael Crichton', 'Eaters of the Dead', '1.50', 'FICTION'),
('0553283936', 'Frederick Forsyth', 'The Negotiator', '5.95', 'FICTION'),
('0553575538', 'Kay Hooper', 'Stealing Shadows', '6.50', 'FICTION'),
('0553577476', 'Leslie Lafoy', 'Lady Reckless', '5.50', 'FICTION'),
('0590262540', 'K.A. Applegate', 'The Threat', '4.99', 'FICTION'),
('0590494368', 'K.A. Applegate', 'The Underground', '4.99', 'FICTION'),
('0590494414', 'K.A. Applegate', 'The Decision', '4.99', 'FICTION'),
('0590496379', 'K.A. Applegate', 'The Discovery', '4.99', 'FICTION'),
('0590956159', 'K.A. Applegate', 'In the Time of Dinosausrs', '4.99', 'FICTION'),
('0596000278', 'Larry Wall Tom Christiansen Jon Orwant', 'Programming Perl', '39.96', 'COMPUTER SCIENCE'),
('0609607995', 'Edwin Black', 'IBM and the Holocaust', '24.00', 'GENERAL'),
('0618056777', 'Jane Goodall', 'Through a Window', '14.00', 'SCIENCE'),
('062593460X', 'Janet Podleski, Greta Podleski, Ted Martin', 'Crazy Plates', '17.95', 'GENERAL'),
('0669076791', 'James Wilson', 'American Government', '39.95', 'GENERAL'),
('067100767X', ' V.C. Andrews', 'Rain', '7.99', 'FICTION'),
('0671032658', 'King, Stephen', 'Green Mile, The', '7.99', 'FICTION'),
('0671047310', 'Vince Flynn', 'The Third Option', '24.95', 'FICTION'),
('0671880756', 'Thomas Hoving', 'Making the Mummies Dance', '21.95', 'GENERAL'),
('0672314800', 'Dave Taylor and James C. Armstrong', 'Sam''s Teach Yourself UNIX in 24 Hours, Second Edition', '19.99', 'COMPUTER SCIENCE'),
('0672319241', 'Sterling Hughes Andrei Zmievski', 'PHP Developers Cookbook', '31.99', 'COMPUTER SCIENCE'),
('0674003306', 'Robert Service', 'Lenin: A Biography', '28.00', 'GENERAL'),
('067944551X', 'Geoffrey C. Ward', 'Jazz : A History of American Music', '52.00', 'GENERAL'),
('067976674X', 'Alice Munro', 'Selected Stories', '16.00', 'FICTION'),
('0684801523', 'Fitzgerald, F. Scott', 'Great Gatsby', '11.95', 'FICTION'),
('0684818701', 'Maria D. Guarnaschelli', 'The New Joy of Cooking', '56.00', 'GENERAL'),
('0684856093', 'Sean Covey', 'The 7 Habits', '12.00', 'CHILDREN'),
('0684869519', 'Wendy Orange', 'Coming Home To Jerusalem: A Personal Journey', '25.00', 'GENERAL'),
('0688069711', 'Gary Selden', 'The Body Electric: Electromagnetism and the Foundation of Life', '13.00', 'SCIENCE'),
('0688127371', 'James A. Peterson', 'Fish and Shellfish', '32.00', 'GENERAL'),
('0688160999', 'Janine M. Benyus', 'Biomimicry : Innovation Inspired by Nature', '14.00', 'SCIENCE'),
('0688161995', 'Chris Schlesinger', 'How to Cook Meat', '28.00', 'GENERAL'),
('0688163165', 'Dennis Lehane', 'Mystic River', '15.00', 'FICTION'),
('0689813813', 'Patricia Mullins', 'One Horse Waiting for Me', '16.00', 'FICTION'),
('0689829418', 'Preiss-Glasser', 'Totally the Messiest', '12.00', 'CHILDREN'),
('0689829531', 'Ian Falconer', 'Olivia', '12.80', 'CHILDREN'),
('0689836015', 'E. L. Konigsburg', 'Silent to the Bone', '107.00', 'CHILDREN'),
('0716736381', 'Niles Eldredge', 'The Triumph of Evolution...And the Failure of Creationism', '48.95', 'SCIENCE'),
('0737800033', 'John H. Johnson', 'Every Wall a ladder', '7.95', 'GENERAL'),
('0738201960', 'Christopher Wills', 'The Spark of Life : Darwin and the Primeval Soup', '72.34', 'SCIENCE'),
('0738204374', 'Steven M. Wise', 'Rattling the Cage: Toward Legal Rights for Animals', '17.50', 'FICTION'),
('0743202104', 'M. Becker, Marion Becker, Ethan Becker', 'Joy of Cooking Soups and Stews', '15.96', 'GENERAL'),
('0743215052', 'Le Carre, John', 'The Constant Gardener', '28.00', 'THRILLERS'),
('0750650869', 'David Howe', 'Data Analysis for Database Design', '32.95', 'COMPUTER SCIENCE'),
('0760049254', 'Philip Pratt', 'The Concepts of Database', '26.00', 'COMPUTER SCIENCE'),
('0761117199', 'Ann Byin and Anthony Loew', 'The Cake Mix Doctor', '13.45', 'GENERAL'),
('076454621X', 'Murdock, Kelly L.', '3D Studio Max R3', '49.99', 'COMPUTER SCIENCE'),
('0764547161', 'Tim Converse Joyce Park', 'PHP4 Bible', '27.99', 'COMPUTER SCIENCE'),
('0767903854', 'Bill Bryson', 'In a Sunburned Country', '25.00', 'GENERAL'),
('0789305003', 'Los Angeles County Museum of Art', 'California Pop-Up Book', '36.00', 'GENERAL'),
('0789404257', 'Various', 'Eyewitness Travel Guides: Italy', '29.95', 'GENERAL'),
('0792393651', 'Jonalthan H. Connell, Sridhar Mahadevan (Editor)', 'Robot Learning', '120.00', 'COMPUTER SCIENCE'),
('0805057579', 'Thomas A. Bass', 'The Predictors', '15.00', 'SCIENCE'),
('0805317554', 'Elmasri and Navathe', 'Fundamentals of Database Systems', '75.95', 'COMPUTER SCIENCE'),
('0807825859', 'Ann Hawthorne', 'Not Afraid of Flavor', '22.00', 'GENERAL'),
('0809299674', 'Adrian Wood', 'The Second World War in Color', '23.67', 'GENERAL'),
('0810936852', 'Peter H Hassrick ', 'The Georgia O_Keeffe Museum', '28.00', 'GENERAL'),
('0810961695', 'Edward Steichen', 'The Family of Man', '15.96', 'GENERAL'),
('0811213668', 'W. G. Sebald, Michael Hulse', 'The Emigrants', '10.95', 'FICTION'),
('0811716937', 'Jerry Predika', 'The Sausage Making Cookbook', '14.36', 'GENERAL'),
('0811826848', 'The Beatles', 'Beatles Anthology, The', '59.95', 'GENERAL'),
('0812093119', 'Martin Sternstein', 'Statistics', '19.95', 'SCIENCE'),
('0812520610', 'Brian Lumley', 'Blood Brothers', '7.99', 'FICTION'),
('0812520629', 'Brian Lumley', 'The Last Aerie', '7.99', 'FICTION'),
('0813527406', 'Iris Fry', 'The Emergence of Life on Earth : A Historical and Scientific Overview', '64.34', 'SCIENCE'),
('0821762559', 'Quinn Taylor Evans', 'Daughter of Camelot', '5.99', 'FICTION'),
('083512035x', 'Liu Zongen', 'Two Year in the Melting pot', '12.99', 'GENERAL'),
('0838479022', 'Elizabeth Byleen', 'Looking Ahead', '31.95', 'GENERAL'),
('0849323754', 'Hooman H. Rashidi', 'Bioinformatics Basics Applications in Biological Science and Medicine', '69.95', 'SCIENCE'),
('0850668093', 'Mansour Rahimi (Editor), Waldemar Karwowski (Editor)', 'Human-Robot Interaction', '110.00', 'COMPUTER SCIENCE'),
('0864426429', 'Kim Grant', 'Lonely Planet Boston', '15.99', 'GENERAL'),
('0870212850', 'Tom Clancy', 'The Hunt For Red October', '27.95', 'FICTION'),
('0874779758', 'Robert Zubrin', 'Entering Space', '19.96', 'FICTION'),
('0882664778', 'Charles G. Reavis, ', 'Home Sausage Making', '11.96', 'GENERAL'),
('0887251714', 'Jim Cottrell', 'Skiing Everyone', '10.00', 'GENERAL'),
('0910146691', 'Allen DE Hart', 'North Carolina Hiking Trails', '14.95', 'GENERAL'),
('0911625291', 'Steve Eckols', 'IMS for the Cobol Programmer', '36.50', 'COMPUTER SCIENCE'),
('0911625453', 'Doug Lowe', 'VSAM for the Cobol Programmer', '27.50', 'COMPUTER SCIENCE'),
('0911625593', 'Steve Eckols', 'DB2 for the Cobol Programmer', '36.50', 'COMPUTER SCIENCE'),
('0911625607', 'Doug Lowe', 'CICS for the Cobol Programmer', '36.50', 'COMPUTER SCIENCE'),
('0911625852', 'Doug Lowe', 'MVS JCL for the Cobol Programmer', '36.50', 'COMPUTER SCIENCE'),
('0932813739', 'David Hatcher Childress', 'Technology of the Gods : The Incredible Sciences of the Ancients', '16.95', 'SCIENCE'),
('0935039031', 'Michael Brown', 'Streetwise Manhattan', '5.95', 'GENERAL'),
('0935112510', 'Clarke, Greg', 'Golf Rules Illustrated', '19.95', 'SPORTS'),
('093570261x', 'Roger L. Dekock', 'Chemical Structure and Bonding', '36.55', 'SCIENCE'),
('0936184388', 'Carl Tremblay', 'The Best Recipe', '32.00', 'GENERAL'),
('0961470151', 'Mark Levine', 'The Jazz Piano Book', '56.00', 'GENERAL'),
('0961549890', 'Lenore W. Horowitz', 'Kauai Underground Guide', '12.95', 'GENERAL'),
('0962477060', 'Bill Edwards', 'Fretboard Logic SE: Volumes Combined', '20.85', 'GENERAL'),
('0966625307', 'Toni Polancy', 'So You Want to Live in Hawaii', '19.95', 'GENERAL'),
('0967174805', 'Carl R. Sam and Jean Stoick', 'Stranger in the Woods', '15.96', 'CHILDREN'),
('0967697603', 'Mercedes Lee ', 'Seafood Lovers Almanac', '19.95', 'GENERAL'),
('1552047210', 'James Herriot', 'James Herriots Favorite Dog Stories', '29.99', 'FICTION'),
('1557044287', 'Ridley Scott', 'Gladiator', '26.36', 'FICTION'),
('1565922840', 'Randal Schwartz Tom Christiansen Larry Wall', 'Learning Perl', '23.96', 'COMPUTER SCIENCE'),
('1565926099', 'David Blank-Edelman', 'Perl for System Administration', '27.96', 'COMPUTER SCIENCE'),
('1565926269', 'Steven Roman', 'Access Database Design And Programming', '27.01', 'COMPUTER SCIENCE'),
('1565927699', 'Rasmus Lerdorf', 'PHP Pocket Reference', '8.95', 'COMPUTER SCIENCE'),
('1566912296', 'Rick Steves', 'Rick Steve Italy 2001', '17.95', 'GENERAL'),
('1573225312', 'Chang-Rae Lee', 'Native Speaker', '12.95', 'FICTION'),
('1576572862', 'Nancy Parent', 'The Little Green Fish', '6.95', 'CHILDREN'),
('1576573842', 'Nancy Parent', 'Santa''s Workshop', '5.95', 'CHILDREN'),
('1581950098', 'Kurt Johnson, Steven L. Coates', 'Nabokovs Blues : The Scientific Odyssey of a Literary Genius', '27.00', 'FICTION'),
('1584500492', 'DeLoura, Mark', 'Game Programming Gems', '69.95', 'COMPUTER SCIENCE'),
('1586480103', 'Andy Rooney and Tom Brokaw', 'MyWar', '15.00', 'GENERAL'),
('1861003730', 'Chris Lea Wankyu Choi Allan Kent Ganesh Prasad Chris Ullman', 'Beginning PHP4', '31.99', 'COMPUTER SCIENCE'),
('1864364432', 'John Ashton', 'In Six Days : Why 50 Scientists Choose to Believe in Creation', '14.95', 'SCIENCE'),
('1878529234', 'Craig Clunas', 'Chinese Furniture', '45.00', 'GENERAL'),
('1884133258', 'Jamsa Klander', 'C/C++ programmer''s bible', '49.99', 'COMPUTER SCIENCE'),
('1902618351', 'Mei Lim (Illustrator)', 'My TV is Alive: Real Life Robots, Future Computers and Clones', '4.95', 'COMPUTER SCIENCE'),
('1930110006', 'David Cross', 'Data Munging with Perl', '29.56', 'COMPUTER SCIENCE'),
('962593460X', 'Ryuichi Yoshii', 'Sushi', '14.36', 'GENERAL');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `userid` varchar(20) NOT NULL DEFAULT '',
  `isbn` char(10) NOT NULL DEFAULT '',
  `qty` int(5) NOT NULL,
  PRIMARY KEY (`userid`,`isbn`),
  KEY `isbn` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(5) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `userid` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) DEFAULT NULL,
  `creditcardtype` varchar(10) DEFAULT NULL,
  `creditcardnumber` char(16) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`fname`, `lname`, `address`, `city`, `state`, `zip`, `phone`, `email`, `userid`, `password`, `creditcardtype`, `creditcardnumber`) VALUES
('Moataz', 'Farid', 'Zahraa Nasr City', 'Cairo', 'Cairo', 12345, '01062552204', 'MoatazMFarid@gmail.com', 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `odetails`
--

CREATE TABLE IF NOT EXISTS `odetails` (
  `ono` int(5) NOT NULL DEFAULT '0',
  `isbn` char(10) NOT NULL DEFAULT '',
  `qty` int(5) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  PRIMARY KEY (`ono`,`isbn`),
  KEY `isbn` (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `userid` varchar(20) NOT NULL,
  `ono` int(5) NOT NULL DEFAULT '0',
  `received` date NOT NULL,
  `shipped` date DEFAULT NULL,
  `shipAddress` varchar(50) DEFAULT NULL,
  `shipCity` varchar(30) DEFAULT NULL,
  `shipState` varchar(20) DEFAULT NULL,
  `shipZip` int(5) DEFAULT NULL,
  PRIMARY KEY (`ono`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `members` (`userid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`);

--
-- Constraints for table `odetails`
--
ALTER TABLE `odetails`
  ADD CONSTRAINT `odetails_ibfk_1` FOREIGN KEY (`ono`) REFERENCES `orders` (`ono`),
  ADD CONSTRAINT `odetails_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `books` (`isbn`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `members` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
