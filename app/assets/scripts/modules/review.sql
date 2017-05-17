
SELECT `critics`.criticName,`t0`.authorName,
 `t0`.title,`t0`.description,`t0`.genre,`t0`.bookPhoto,`t0`.pages,`t0`.pubDat,
  `reviews`.review,`reviews`.stars,`reviews`.score ,`reviews`.reviewId from 
  `reviews` inner join `critics` on `reviews`.criticId=`critics`.criticId 
  inner join  
  (select `books`.bookId,`authors`.authorName,
 `books`.title,`books`.description,`books`.genre,`books`.bookPhoto,`books`.pages,`books`.pubDat
 from `books` inner join `authors` on
  `books`.authorId=`authors`.authorId) as t0
  on `reviews`.bookId=`t0`.bookId
