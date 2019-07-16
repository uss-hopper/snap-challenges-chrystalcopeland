ALTER DATABASE canderson73 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS `like`;
DROP TABLE IF EXISTS tweet;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	-- this creates the attribute for the primary key
	-- not null means the attribute is required!
	taskId BINARY(20) NOT NULL,
	taskTitle varCHAR(225) NOT NULL,
	taskStartDate datetime,
	taskDueDate datetime,
	taskStatus VARCHAR (64) NOT NULL,
	taskPriority VARCHAR(64) NOT NULL,
	taskDescription VARCHAR(256)

	-- Primary Key
	PRIMARY KEY (taskId)

Select * from Table
(tweetId, 0536faef082b454e9d444cdbe7887d7a)
Select * from Table
(tweetContent)
Select * from Table
(profileAtHandle)