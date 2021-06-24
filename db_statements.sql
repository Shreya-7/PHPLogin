CREATE TABLE user (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO user (username, password) VALUES ('Shreya', '12345');
INSERT INTO user (username, password) VALUES ('CSE', 'cse123');