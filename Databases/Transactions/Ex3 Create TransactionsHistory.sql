USE DT16TransactionsATM

CREATE TABLE TransactionHistory (
Id INTEGER NOT NULL PRIMARY KEY IDENTITY ,
CardNumber CHAR(10) NOT NULL FOREIGN KEY REFERENCES CardAccounts(CardNumber),
TransactionDate DateTime NOT NULL,
Amount MONEY NOT NULL) 