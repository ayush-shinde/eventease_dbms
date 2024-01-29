CREATE DATABASE EventDB;
USE EventDB;

DROP TABLE Ticket;
DROP TABLE Performs;
DROP TABLE Occurs_at;
DROP TABLE Payment_Paidby;
DROP TABLE Feedback_Given;
DROP TABLE Order_Placed;
DROP TABLE User_;
DROP TABLE Seat_Location;
DROP TABLE Venue_Located;
DROP TABLE Location_;
DROP TABLE Event_Performer;
DROP TABLE Sports;
DROP TABLE Concerts;
DROP TABLE Standups;
DROP TABLE Movies;
DROP TABLE Art_Exhibitions;
DROP TABLE Event;

CREATE TABLE Event(
Event_ID VARCHAR(5),
Title VARCHAR(40),
Datetime TIMESTAMP,
PRIMARY KEY(Event_ID)
);

CREATE TABLE Art_Exhibitions(
Event_ID VARCHAR(5),
Genre VARCHAR(20),
PRIMARY KEY(Event_ID),
FOREIGN KEY (Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE
);

CREATE TABLE Movies(
Event_ID VARCHAR(5),
Actors VARCHAR(60),
Genre VARCHAR(20),
PRIMARY KEY(Event_ID),
FOREIGN KEY (Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE
);

CREATE TABLE Standups(
Event_ID VARCHAR(5),
Genre VARCHAR(20),
PRIMARY KEY(Event_ID),
FOREIGN KEY (Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE
);

CREATE TABLE Concerts(
Event_ID VARCHAR(5),
Genre VARCHAR(20),
PRIMARY KEY(Event_ID),
FOREIGN KEY (Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE
);

CREATE TABLE Sports(
Event_ID VARCHAR(5),
Sport VARCHAR(20),
PRIMARY KEY(Event_ID),
FOREIGN KEY (Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE
);

CREATE TABLE Event_Performer(
Performer_ID VARCHAR(5),
Name_ VARCHAR(20),
PRIMARY KEY(Performer_ID)
);

CREATE TABLE Location_(
Location_ID VARCHAR(5),
Address VARCHAR(30),
City VARCHAR(15),
State_ VARCHAR(15),
Zipcode CHAR(5),
PRIMARY KEY(Location_ID)
);

CREATE TABLE Venue_Located(
Venue_ID VARCHAR(5),
Venue_Name VARCHAR(40),
Location_ID VARCHAR(5),
PRIMARY KEY(Venue_ID),
FOREIGN KEY(Location_ID) REFERENCES Location_(Location_ID) ON DELETE CASCADE
);

CREATE TABLE Seat_Location(
Seat_ID VARCHAR(5),
Seat_Type VARCHAR(5),
Seat_Number VARCHAR(5),
Status VARCHAR(10),
PRIMARY KEY(Seat_ID)
);

CREATE TABLE User_(
Username VARCHAR(20),
Name_ VARCHAR(30),
Email VARCHAR(40),
PRIMARY KEY(Username),
UNIQUE(Email)
);

CREATE TABLE Order_Placed(
Username VARCHAR(5) NOT NULL,
Order_ID VARCHAR(10),
Total_Cost REAL,
Order_Datetime TIMESTAMP,
PRIMARY KEY(Order_ID),
FOREIGN KEY(Username) REFERENCES User_(Username)
);

CREATE TABLE Feedback_Given(
Username VARCHAR(5),
Feedback_ID VARCHAR(5),
Rating INT NOT NULL,
Comments CHAR(100),
PRIMARY KEY(Username, Feedback_ID),
FOREIGN KEY(Username) REFERENCES User_(Username) ON DELETE CASCADE
);

CREATE TABLE Payment_Paidby(
Payment_ID VARCHAR(5),
Payment_Type VARCHAR(10),
Order_ID VARCHAR(10),
PRIMARY KEY(Order_ID, Payment_ID),
FOREIGN KEY(Order_ID) REFERENCES Order_Placed(Order_ID) ON DELETE CASCADE
);

CREATE TABLE Occurs_at(
Event_ID VARCHAR(5),
Location_ID VARCHAR(5),
PRIMARY KEY(Event_ID, Location_ID),
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE,
FOREIGN KEY(Location_ID) REFERENCES Location_(Location_ID)
);

CREATE TABLE Performs(
Performer_ID VARCHAR(5),
Event_ID VARCHAR(5),
PRIMARY KEY(Event_ID, Performer_ID),
FOREIGN KEY(Performer_ID) REFERENCES Event_Performer(Performer_ID),
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE
);

CREATE TABLE Ticket(
Ticket_ID VARCHAR(5),
Ticket_Cost REAL,
Event_ID VARCHAR(5) NOT NULL,
Order_ID VARCHAR(5) NOT NULL,
Seat_ID VARCHAR(5) NOT NULL,
PRIMARY KEY(Ticket_ID, Event_ID, Seat_ID, Order_ID),
FOREIGN KEY(Event_ID) REFERENCES Event(Event_ID) ON DELETE CASCADE,
FOREIGN KEY(Order_ID) REFERENCES Order_Placed(Order_ID),
FOREIGN KEY(Seat_ID) REFERENCES Seat_Location(Seat_ID)
);

INSERT
INTO Event(Event_ID, Title, Datetime)
VALUES('10000', 'Frontiers of Impressionism', STR_TO_DATE('2023-04-05 10:00:00', '%Y-%m-%d %H:%i:%s'));

INSERT
INTO Art_Exhibitions(Event_ID, Genre)
VALUES('10000', 'Impressionism');

INSERT
INTO Location_(Location_ID, Address, City, State_, Zipcode)
VALUES('02468', '55 Salisbury St', 'Worcester', 'MA', '01609');

INSERT 
INTO Venue_Located(Venue_ID, Venue_Name, Location_ID)
VALUES('001', 'Worcester Art Museum', '02468');

INSERT 
INTO Occurs_at(Event_ID, Location_ID)
VALUES('10000', '02468');

INSERT
INTO Event(Event_ID, Title, Datetime)
VALUES('01000', 'Don''t Worry Darling', STR_TO_DATE('2023-04-20 04:00:00', '%Y-%m-%d %H:%i:%s'));

INSERT 
INTO Movies(Event_ID, Actors, Genre)
VALUES('01000', 'Florence Pugh, Harry Styles, Olivia Wilde', 'Thriller');

UPDATE Movies M
SET M.Actors = 'Florence Pugh, Harry Styles, Olivia Wilde, Chris Pine'
WHERE M.Event_ID = '01000';

INSERT
INTO Location_(Location_ID, Address, City, State_, Zipcode)
VALUES('13579', '70 Worcester/Prov. Tpke', 'Millbury', 'MA', '01527');

INSERT
INTO Venue_Located(Venue_ID, Venue_Name, Location_ID)
VALUES('002', 'Blackstone Valley 14: Cinema De Lux', '13579');

INSERT 
INTO Occurs_at(Event_ID, Location_ID)
VALUES('01000', '13579');

INSERT 
INTO Event(Event_ID, Title, Datetime)
VALUES('00100', 'BEER GIGGLES! Live Comedy', STR_TO_DATE('2023-04-12 20:00:00', '%Y-%m-%d %H:%i:%s'));

INSERT 
INTO Standups(Event_ID, Genre)
VALUES('00100', 'Comedy');

INSERT
INTO Location_(Location_ID, Address, City, State_, Zipcode)
VALUES('45678', '58 Shrewsbury St', 'Worcester', 'MA', '01604');

INSERT
INTO Venue_Located(Venue_ID, Venue_Name, Location_ID)
VALUES('003', 'The Pint', '45678');

INSERT 
INTO Occurs_at(Event_ID, Location_ID)
VALUES('00100', '45678');

INSERT 
INTO Event(Event_ID, Title, Datetime)
VALUES('00010', 'Burn, Burn, Burn Tour', STR_TO_DATE('2023-05-12 20:00:00', '%Y-%m-%d %H:%i:%s'));

INSERT
INTO Concerts(Event_ID, Genre)
VALUES('00010', 'Country');

INSERT
INTO Location_(Location_ID, Address, City, State_, Zipcode)
VALUES('87654', '50 Foster St', 'Worcester', 'MA', '01608');

INSERT
INTO Venue_Located(Venue_ID, Venue_Name, Location_ID)
VALUES('004', 'DCU Center', '87654');

INSERT 
INTO Occurs_at(Event_ID, Location_ID)
VALUES('00010', '87654');

INSERT
INTO Event_Performer(Performer_ID, Name_)
VALUES('12345', 'Zach Bryan');

INSERT
INTO Performs(Performer_ID, Event_ID)
VALUES('12345', '00010');

INSERT
INTO Event(Event_ID, Title, Datetime)
VALUES('00001', 'Worcester Railers vs. Adirondack Thunder', STR_TO_DATE('2023-03-25 19:00:00', '%Y-%m-%d %H:%i:%s'));

INSERT
INTO Sports(Event_ID, Sport)
VALUES('00001', 'Hockey');

INSERT 
INTO Occurs_at(Event_ID, Location_ID)
VALUES('00001', '87654');

INSERT
INTO Event_Performer(Performer_ID, Name_)
VALUES('54321', 'Worcester Railers');

INSERT
INTO Event_Performer(Performer_ID, Name_)
VALUES('98765', 'Adirondack Thunder');

INSERT
INTO Performs(Performer_ID, Event_ID)
VALUES('54321', '00001');

INSERT
INTO Performs(Performer_ID, Event_ID)
VALUES('98765', '00001');

INSERT 
INTO User_(Username, Name_, Email)
VALUES('cberthiaume', 'Christina Berthiaume', 'christinaberthiaume0@gmail.com');

UPDATE User_ U
SET U.Email = 'cmberthiaume@wpi.edu'
WHERE U.Username = 'cberthiaume';

INSERT
INTO User_(Username, Name_, Email)
VALUES('annieb', 'Annmarie Berthiaume', 'annieberthiaume@gmail.com');

SELECT * FROM User_;

DELETE
FROM User_ U
WHERE U.Username = 'annieb';

SELECT * FROM Event;

SELECT E.Title
FROM Event E
WHERE E.Event_ID = '10000';

DELETE
FROM Event E
WHERE E.Event_ID = '10000';

SELECT * FROM Event;

SELECT S.Sport
FROM Sports S
WHERE S.Event_ID = '00001';