ALTER TABLE Users
ADD GroupID int
UPDATE Users SET GroupID=0 WHERE GroupID IS NULL
ALTER TABLE Users
ALTER COLUMN GroupID INTEGER NOT NULL
ALTER TABLE Groups
ADD PRIMARY KEY (GroupID)
INSERT INTO Groups VALUES('BAR TEAM')
ALTER TABLE Users
ADD CONSTRAINT FK_Usres_Groups FOREIGN KEY (GroupID) 
	REFERENCES Groups(GroupID)