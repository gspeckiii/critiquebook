DROP DATABASE IF EXISTS critiquebook;
CREATE DATABASE IF NOT EXISTS critiquebook;
 
USE critiquebook;
 
CREATE TABLE authors(
               authorId INT(11)
               NOT NULL AUTO_INCREMENT,
               PRIMARY KEY(authorId),
               authorName varchar(255) NOT NULL,
               authorBio varchar(5000) NOT NULL,
               authorPhoto varchar(50) NOT NULL,
               born date NOT NULL,
               died date 
              
 
)ENGINE=InnoDB COLLATE utf8_general_ci;
 
CREATE TABLE critics(
               criticId INT(11)
               NOT NULL AUTO_INCREMENT,
               PRIMARY KEY(criticId),
               criticName varchar(255) NOT NULL,
               criticBio varchar(5000) NOT NULL,
               criticPhoto varchar(50) NOT NULL,
               criticEmail varchar(255) NOT NULL,
               criticPswrd varchar(8) NOT NULL
 
)ENGINE=InnoDB COLLATE utf8_general_ci;
 
CREATE TABLE books(
               bookId INT(11)
               NOT NULL AUTO_INCREMENT,
               PRIMARY KEY(bookId),
               title varchar(255) NOT NULL,
               description varchar(255) NOT NULL,
               genre varchar(255) NOT NULL,
               bookPhoto varchar(50) NOT NULL,
               pages int(4) NOT NULL,
               pubDat date NOT NULL,
               authorId INT(11) NOT NULL,
               INDEX par_id(authorId) NOT NULL,
               FOREIGN KEY(authorId)
                              REFERENCES authors(authorId)
                              ON DELETE CASCADE
              
 
) ENGINE=InnoDB COLLATE utf8_general_ci;
 
CREATE TABLE reviews(
               reviewId INT(11)
               NOT NULL AUTO_INCREMENT,
               criticId INT(11) NOT NULL,
               bookId INT(11) NOT NULL,
               stars INT(2) NOT NULL DEFAULT 0,
               score INT(2) NOT NULL DEFAULT 0,
               review varchar(5000) NOT NULL,
              
               PRIMARY KEY(reviewId),
               INDEX(criticId),
               INDEX(bookId),
 
               FOREIGN KEY(criticId)
               REFERENCES critics(criticId)
               ON UPDATE CASCADE ON DELETE RESTRICT,
 
               FOREIGN KEY(bookId)
               REFERENCES books(bookId)        
 
 
 
) ENGINE=InnoDB COLLATE utf8_general_ci;