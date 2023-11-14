/*
BCS 501 - Database Systems
Group Assignment
Session: Feb 2021

        Members:
- WALID DELILECHE [20200175]
- WONG HAU KIT [20190033]
*/



/*
This sql file is used for creating tables, and inserting, editing, and deleting data
*/

-- ------------------------------
-- Creating table for ADMIN users

CREATE TABLE ADMIN (
UserID Int(15) AUTO_INCREMENT PRIMARY KEY,
Username varchar(15) NOT NULL,
Pssword varchar(40) NOT NULL
);

-- Insert data into table ADMIN
INSERT INTO `ADMIN` (`Username`, `Pssword`) VALUES
('admin', 'admin');


-- ------------------------
-- Creating table for GUEST

CREATE TABLE GUEST (
GuestID Int(15) AUTO_INCREMENT PRIMARY KEY, 
GuestFirstName varchar(60) NOT NULL,
GuestLastName varchar(60) NOT NULL,
GuestPhoneNumber Int(15) NOT NULL,
GuestEmail varchar(35) NOT NULL UNIQUE,
GuestAddress varchar(100) NOT NULL, 
GuestCity varchar(35) NOT NULL,
GuestCountry varchar(35) NOT NULL,
GuestRegistrationDate Date NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Inserting data into GUEST table
INSERT INTO `GUEST` (`GuestFirstName`, `GuestLastName`, `GuestPhoneNumber`, `GuestEmail`, `GuestAddress`, `GuestCity`, `GuestCountry`) VALUES
('Mike', 'Adams', 0172358036, 'mikeadams@gmail.com', 'Jalan Punchak Off, Jalan P. Ramlee', 'Kuala Lumpur', 'Malaysia'),
('Jane', 'Someone', 0172323036, 'Janesome@yahoo.fr', 'Jalan Sultan Ismail, Jalan P. Ramlee', 'Kuala Lumpur', 'Malaysia')
;

-- ------------------------
-- Creating table for HOTEL

CREATE TABLE HOTEL (
HotelID Int(15) AUTO_INCREMENT PRIMARY KEY,
HotelName varChar(50) NOT NULL,
HotelAddress varchar(100) NOT NULL,
HotelCity varchar(35) NOT NULL,
HotelZip Int(15) NOT NULL,
HotelCountry varchar(35) NOT NULL,
HotelPhoneNumber Int(15) NOT NULL
); 

-- Inserting data into HOTEL table

INSERT INTO `HOTEL` (`HotelName`, `HotelAddress`, `HotelZip`, `HotelCity`, `HotelCountry`, `HotelPhoneNumber`) VALUES
('Hypnos Hotel', 'No.2 Jalan Anjung Putra, Off Jalan Sultan Ismail', 50480, 'Kuala Lumpur', 'Malaysia', 0154862548),
('Hypnos Hotel', 'Jalan Punchak Off, Jalan P. Ramlee', 50250, 'Kuala Lumpur', 'Malaysia', 0125486235);


-- -----------------------
-- Creating table for ROOM

CREATE TABLE ROOM (
RoomID Int(15) AUTO_INCREMENT PRIMARY KEY,
RoomNumber Int(15) NOT NULL,
RoomType varchar(50) NOT NULL,
RoomRate Int(10) NOT NULL,
HotelID int(15),
FOREIGN KEY (HotelID) REFERENCES HOTEL(HotelID),
RoomStatus varchar(50) NOT NULL
); 

-- Inserting data into ROOM table

INSERT INTO `ROOM` (`RoomNumber`, `RoomType`, `RoomRate`, `HotelID`, `RoomStatus`) VALUES
(101, 'Single Room', 150, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(102, 'Single Room', 150, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(103, 'Double Room', 280, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(104, 'Twin Room', 290, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(105, 'Triple Room', 390, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(201, 'Single Room', 150, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(202, 'Double Room', 280, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(203, 'Double Room', 280, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(204, 'Twin Room', 290, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(205, 'Triple Room', 390, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(301, 'Single Room', 150, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(302, 'Double Room', 280, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(303, 'Twin Room', 290, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(304, 'Twin Room', 290, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),
(305, 'Triple Room', 390, (SELECT HotelID from HOTEL WHERE HotelID = 1), 'Available'),

(101, 'Single Room', 150, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(102, 'Single Room', 150, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(103, 'Double Room', 280, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(104, 'Twin Room', 290, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(105, 'Triple Room', 390, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(201, 'Single Room', 150, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(202, 'Double Room', 280, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(203, 'Double Room', 280, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(204, 'Twin Room', 290, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(205, 'Triple Room', 390, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(301, 'Single Room', 150, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(302, 'Double Room', 280, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(303, 'Twin Room', 290, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(304, 'Twin Room', 290, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available'),
(305, 'Triple Room', 390, (SELECT HotelID from HOTEL WHERE HotelID = 2), 'Available');



-- ------------------------------
-- Creating table for RESERVATION

CREATE TABLE RESERVATION (
ReservationID Int(15) AUTO_INCREMENT PRIMARY KEY,
GuestID int(15),
FOREIGN KEY (GuestID) REFERENCES GUEST(GuestID),
CheckInDate Date NOT NULL,
CheckOutDate Date NOT NULL,
RegistrationDate Date NOT NULL DEFAULT CURRENT_TIMESTAMP,
RoomID int(15),
FOREIGN KEY (RoomID) REFERENCES ROOM(RoomID)
); 


-- -------------------------------------
-- Inserting data into RESERVATION table

INSERT INTO `RESERVATION` (`GuestID`, `CheckInDate`, `CheckOutDate`, `RoomID`) VALUES
((SELECT GuestID from GUEST WHERE GuestID = 3), '2021-05-19', '2021-05-23', (SELECT RoomID from ROOM WHERE RoomID = 12)),
((SELECT GuestID from GUEST WHERE GuestID = 3), '2021-07-11', '2021-07-25', (SELECT RoomID from ROOM WHERE RoomID = 9)),
((SELECT GuestID from GUEST WHERE GuestID = 4), '2021-06-15', '2021-06-05', (SELECT RoomID from ROOM WHERE RoomID = 14)),
((SELECT GuestID from GUEST WHERE GuestID = 4), '2021-08-23', '2021-08-29', (SELECT RoomID from ROOM WHERE RoomID = 2));



-- --------------------------
-- Creating table for BILLING

CREATE TABLE BILLING (
BillingID Int(15) AUTO_INCREMENT PRIMARY KEY,
ReservationID Int(15),
FOREIGN KEY (ReservationID) REFERENCES RESERVATION(ReservationID),
GuestID Int(15),
FOREIGN KEY (GuestID) REFERENCES GUEST(GuestID),
RoomCharge Int(10) NOT NULL,
ServiceCharge Int(10) NOT NULL,
PaymentDate Date NULL
); 


-- --------------------------
-- Creating table for SERVICE

CREATE TABLE SERVICE (
ServiceID Int(15) AUTO_INCREMENT PRIMARY KEY,
ServiceName varchar(30) NOT NULL,
ServiceCharge Int(10) NOT NULL
);

-- Inserting  data for into SERVICE table

INSERT INTO `SERVICE` (`ServiceName`, `ServiceCharge`) VALUES
( 'Dine-in', 30),
( 'Dry Cleaning', 40),
( 'Doctor on Call', 60);


-- ------------------------
-- Creating table for STAFF

CREATE TABLE STAFF (
StaffID Int(15) AUTO_INCREMENT PRIMARY KEY,
StaffFirstName varchar(60) NOT NULL,
StaffLastName varchar(60) NOT NULL,
StaffPhoneNumber varchar(15) NOT NULL,
StaffEmail varchar(35) NOT NULL UNIQUE,
StaffAddress varchar(100) NOT NULL, 
StaffCity varchar(35) NOT NULL,
StaffCountry varchar(35) NOT NULL,
StaffRegistrationDate Date NOT NULL DEFAULT CURRENT_TIMESTAMP,
HotelID Int(15),
FOREIGN KEY (HotelID) REFERENCES HOTEL(HotelID),
Position varchar(35) NOT NULL
);

-- Inserting data into STAFF table
INSERT INTO `STAFF` (`StaffFirstName`, `StaffLastName`, `StaffPhoneNumber`, `StaffEmail`, `StaffAddress`, `StaffCity`, `StaffCountry`, `HotelID`, `Position`) VALUES
('Henry', 'Avery', 0172678036, 'henryavery@gmail.com', '157 Hampshire Place Office, Level 5 & 6, 157, Jalan Mayang Sari', 'Kuala Lumpur', 'Malaysia', 1, 'Front Desk Manager'),
('Serena', 'Jackson', 0172678036, 'serenajackson@gmail.com', 'Wisma Concorde, No 2, Jalan Sultan Ismail', 'Kuala Lumpur', 'Malaysia', 1, 'Cleaning'),
('Son', 'Goku', 0172295036, 'severussnape@gmail.com', 'Jalan SS15/4D, Ss 15', 'Kuala Lumpur', 'Malaysia', 1, 'Head Chef'),
('Severus', 'Snape', 0134878036, 'songoku@gmail.com', '157 Hampshire Place Office, Level 5 & 6, 157, Jalan Mayang Sari', 'Kuala Lumpur', 'Malaysia', 2, 'Restaurant Manager'),
('Harry', 'Potter', 0172675842, 'harrypotter@gmail.com', '60, Jalan Sri Hartamas 1, Taman Sri Hartamas', 'Kuala Lumpur', 'Malaysia', 2, 'IT Manager')
;
