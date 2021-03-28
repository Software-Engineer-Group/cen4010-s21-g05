DROP DATABASE chatflix_db;
CREATE DATABASE chatflix_db;
USE chatflix_db;

CREATE TABLE defaultUser(
    user_id INT NOT NULL AUTO_INCREMENT,
    userName VARCHAR(20) NOT NULL, 
    userPass VARCHAR(10) NOT NULL,
    userEmail VARCHAR(50) NOT NULL,
    userRole VARCHAR(10), 

    PRIMARY KEY (user_id)
);

CREATE UNIQUE INDEX  user_name
ON defaultUser(userName);

CREATE TABLE blogUser(
    avatar_id INT NOT NULL,
    fullName VARCHAR(20),
    dateJoined VARCHAR(10),
    activityStatus INT,
    privacySet INT

);

CREATE UNIQUE INDEX avatarId
ON blogUser (avatar_id);

CREATE TABLE modUser(
    id INT PRIMARY KEY AUTO_INCREMENT,
    completed BOOLEAN
);

CREATE TABLE seriesPg(
    seriesId INT NOT NULL,
    seriesSeasons INT,
    seriesImg INT NOT NULL,
    seriesName VARCHAR(20) NOT NULL,
    seriesBio VARCHAR(2000),

    PRIMARY KEY(seriesId)
);

CREATE TABLE discThread(
    threadId INT NOT NULL,
    threadTopic VARCHAR(20),
    PRIMARY KEY(threadId)
);

CREATE TABLE discPost(
    postId INT NOT NULL,
    threadId INT NOT NULL,
    avatar_id INT NOT NULL,
    userName VARCHAR(20) NOT NULL,
    postCont VARCHAR(2000),

    PRIMARY KEY(postId),
    FOREIGN KEY(threadId) REFERENCES discThread(threadId),
    FOREIGN KEY(avatar_id) REFERENCES blogUser(avatar_id),
    FOREIGN KEY(userName) REFERENCES defaultUser(userName)
);

CREATE TABLE FriendList(
    user_id INT NOT NULL AUTO_INCREMENT,
    avatar_id INT NOT NULL,
    userName VARCHAR(20) NOT NULL,

    PRIMARY KEY (user_id),
    FOREIGN KEY(avatar_id) REFERENCES blogUser(avatar_id),
    FOREIGN KEY(userName) REFERENCES defaultUser(userName)
);