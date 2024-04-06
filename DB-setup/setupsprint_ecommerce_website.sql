CREATE TABLE admin (
  AdminID int(11) NOT NULL AUTO_INCREMENT,
  Username varchar(50) NOT NULL,
  PasswordHash varchar(255) NOT NULL,
  PRIMARY KEY (AdminID),
  UNIQUE KEY Username (Username)
);

INSERT INTO admin (Username, PasswordHash) VALUES
('admin', 'admin');

CREATE TABLE clients (
  ClientID int(11) NOT NULL AUTO_INCREMENT,
  FirstName varchar(255) NOT NULL,
  LastName varchar(255) NOT NULL,
  Email varchar(255) NOT NULL,
  PasswordHash varchar(255) NOT NULL,
  Address varchar(255),
  PhoneNumber varchar(20),
  PRIMARY KEY (ClientID),
  UNIQUE KEY Email (Email)
);

INSERT INTO clients (FirstName, LastName, Email, PasswordHash, Address, PhoneNumber) VALUES
('test', 'test', 'user@test.com', 'user', 'Avenue Habib Bourguiba', '98054873'),
('test', 'test', 'a@test.com', '0', 'Avenue Habib Bourguiba', '00000000');


CREATE TABLE orders (
  OrderID int(11) NOT NULL AUTO_INCREMENT,
  ClientID int(11),
  OrderDate timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  TotalAmount decimal(10,2),
  OrderStatus varchar(20),
  PRIMARY KEY (OrderID),
  KEY ClientID (ClientID),
  CONSTRAINT orders_ibfk_1 FOREIGN KEY (ClientID) REFERENCES clients (ClientID)
);

CREATE TABLE product (
  ProductID int(11) NOT NULL AUTO_INCREMENT,
  ProductName varchar(255) NOT NULL,
  Description text,
  Category text,
  SupplierID varchar(100),
  OldPrice decimal(10,2) NOT NULL,
  SpecialPrice decimal(10,2),
  QuantityInStock int(11),
  DateAdded date,
  LastUpdated timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  Discount decimal(5,2),
  ImageURL varchar(255),
  Rating decimal(3,2),
  Status varchar(20),
  Brand varchar(40),
  PRIMARY KEY (ProductID)
);
CREATE TABLE orderdetail (
  OrderDetailID int(11) NOT NULL AUTO_INCREMENT,
  OrderID int(11),
  ProductID int(11),
  Quantity int(11),
  Subtotal decimal(10,2),
  PRIMARY KEY (OrderDetailID),
  KEY OrderID (OrderID),
  KEY ProductID (ProductID),
  CONSTRAINT orderdetail_ibfk_1 FOREIGN KEY (OrderID) REFERENCES orders (OrderID),
  CONSTRAINT orderdetail_ibfk_2 FOREIGN KEY (ProductID) REFERENCES product (ProductID)
);