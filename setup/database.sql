
CREATE TABLE comments (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `comment` varchar(500) NOT NULL,
  `commenters_name` varchar(20) DEFAULT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE courses (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `code` varchar(10) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `simester` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE course_grades (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_grade` double NOT NULL,
  `exam_grade` double NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE course_requirements (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `labs` int(11) NOT NULL,
  `lectures` int(11) NOT NULL,
  `tutorial` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE lecturers (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecturer_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE lecture_maps (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE messages(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senders_id` int(11) NOT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `receiver_username` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `sent_date` date NOT NULL,
  `attachments` blob,
  PRIMARY KEY (`id`)
);

CREATE TABLE prerequisites (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(30) NOT NULL,
  `grade` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE registered_courses (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE schedules (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `crn` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `day` varchar(20) DEFAULT NULL,
  `time` time NOT NULL,
  `room` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `crn` (`crn`),
  UNIQUE KEY `crn_2` (`crn`)
);


CREATE TABLE students (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `registered_faculty` varchar(30) NOT NULL,
  `major_1` varchar(30) NOT NULL,
  `major_2` varchar(30) DEFAULT NULL,
  `minor_1` varchar(30) DEFAULT NULL,
  `minor_2` varchar(30) DEFAULT NULL,
  `year_of_study` int(11) NOT NULL,
  `credit_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE users (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE admins (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
  );
CREATE TABLE user_types
(
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
);
INSERT INTO `user_types` (`name`) VALUES ('admin');
INSERT INTO `user_types` (`name`) VALUES ('student');
INSERT INTO `user_types` (`name`) VALUES ('assistant');

