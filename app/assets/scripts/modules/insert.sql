INSERT INTO `authors` (`authorId`, `authorName`, `authorBio`, `authorPhoto`, `born`, `died`) VALUES (NULL, 'Leon Uris', 'Leon Uris was the shit', 'uris.png', '1924-08-03', '2003-06-21');

INSERT INTO `books` (`bookId`, `title`, `description`, `genre`, `bookPhoto`, `pages`, `pubDat`, `authorId`) VALUES (NULL, 'Exodus', 'Jewish settlement of Isreal', 'Historical Fiction', 'urisExodus.png', '608', '1958-01-01', '2');

INSERT INTO `critics` (`criticId`, `criticName`, `criticBio`, `criticPhoto`, `criticEmail`,'criticPswrd') VALUES (NULL, 'George Sherman Peck III', 'Artist and engineer that loves to ride bikes and build functional objects', 'peckGeorge.png', 'g.peck.iii@gmail.com','trapper7');

INSERT INTO `reviews` (`reviewId`, `criticId`, `bookId`, `stars`, `score`, `review`) VALUES (NULL, '1', '1', '5', '10', 'Exodus is the story of the greatest miracle of our times, an event unparalleled in the history of mankind: the rebirth of a nation which had been dispersed 2,000 years before. It tells the story of the Jews coming back after centuries of abuse, indignities, torture, and murder to carve an oasis in the sand with guts and with blood....Exodus is about fighting people, people who do not apologize either for being born Jews or the right to live in human dignity');

