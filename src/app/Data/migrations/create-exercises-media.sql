CREATE TABLE exercises_media(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    media_id INTEGER NOT NULL UNIQUE,
    exercises_id INTEGER NOT NULL UNIQUE,
    FOREIGN KEY (media_id) REFERENCES media(id),
    FOREIGN KEY (exercises_id) REFERENCES exercises(id),
);
