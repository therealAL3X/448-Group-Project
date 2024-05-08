CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    username VARCHAR(100) UNIQUE,
    password VARCHAR(100)
);

CREATE TABLE classes (
    class_id INT AUTO_INCREMENT PRIMARY KEY,
    class_name VARCHAR(100),
    description TEXT
);

CREATE TABLE studyGroups (
    group_id INT AUTO_INCREMENT PRIMARY KEY,
    class_id INT,
    group_name VARCHAR(100),
    description TEXT,
    FOREIGN KEY (class_id) REFERENCES classes(class_id)
);

CREATE TABLE groupMembers (
    user_id INT,
    group_id INT,
    joined_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (user_id, group_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (group_id) REFERENCES studyGroups(group_id)
);