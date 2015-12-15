DROP  DATABASE  IF EXISTS   voting;
CREATE DATABASE  IF NOT EXISTS voting;

DROP TABLE IF EXISTS voted;
  CREATE TABLE IF NOT EXISTS voted(
    voted_id INT UNSIGNED PRIMARY KEY ,
    has_selected BOOLEAN DEFAULT 0,
    has_voted BOOLEAN DEFAULT 0
  );

DROP TABLE IF EXISTS posts;
CREATE TABLE IF NOT EXISTS posts(
  post_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  post VARCHAR (200) NOT NULL
);

DROP TABLE IF EXISTS departments;
CREATE TABLE IF NOT EXISTS departments(
  department_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
  department VARCHAR (200)
);

DROP TABLE IF EXISTS voters;
  CREATE TABLE IF NOT EXISTS voters(
    voter_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR (20) NOT NULL ,
    lname VARCHAR (20) NOT NULL ,
    level VARCHAR (10) NOT NULL ,
    email VARCHAR (100) UNIQUE NOT NULL ,
    username VARCHAR (100) UNIQUE NOT NULL ,
    pword VARCHAR (20) NOT NULL ,
    account_created_on DATETIME ,
    account_modified_on DATETIME,
    vote INT UNSIGNED ,
    department INT UNSIGNED ,
    CONSTRAINT fk_voters_voted FOREIGN KEY (vote) REFERENCES voted(voted_id),
    CONSTRAINT fk_voters_department FOREIGN KEY (department) REFERENCES departments(department_id)
  );

DROP TABLE IF EXISTS contestants;
  CREATE TABLE IF NOT EXISTS contestants(
    contestants_id INT UNSIGNED PRIMARY KEY,
    nickname VARCHAR (100) NOT NULL,
    number_of_votes INT UNSIGNED,
    post INT UNSIGNED ,
    name INT UNSIGNED ,
    CONSTRAINT fk_contestants_post FOREIGN KEY (post) REFERENCES posts(post_id),
    CONSTRAINT fk_contestants_name FOREIGN KEY (name) REFERENCES voters(voter_id)
  );
DROP TABLE IF EXISTS students;
CREATE TABLE IF NOT EXISTS students(
  student_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
  name VARCHAR (150),
  matric_number VARCHAR (20),
  level VARCHAR (20),
  department INT UNSIGNED ,
  CONSTRAINT fk_students_department FOREIGN KEY (department) REFERENCES departments(department_id)
);