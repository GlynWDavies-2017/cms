CREATE DATABASE cms;

CREATE USER 'cmsadmin'@'localhost' IDENTIFIED BY 'sesame';

GRANT ALL PRIVILEGES ON *.* TO 'cmsadmin'@'localhost';

CREATE TABLE article (
  id              INTEGER             NOT NULL    AUTO_INCREMENT  ,
  title           VARCHAR   (128)     NOT NULL                    ,
  content         TEXT                NOT NULL                    ,
  publishedAt     DATETIME                                        ,
    CONSTRAINT pkcArticleID
      PRIMARY KEY (id)
);

INSERT INTO article VALUES ('','First Post','This is the first of many posts!','2018-10-25 10:30:24');
INSERT INTO article VALUES ('','Second Post','Another interesting post!','2018-10-26 12:19:35');
INSERT INTO article VALUES ('','An Interesting Post','Well, this is interesting!','2018-10-26 14:16:35');
INSERT INTO article VALUES ('','Another Post','More interesting stuff!','2018-10-27 08:22:25');
INSERT INTO article VALUES ('','Unbelievable','This is unbelievable!','2018-10-28 15:22:25');

COMMIT;
