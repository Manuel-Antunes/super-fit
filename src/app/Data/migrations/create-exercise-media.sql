CREATE TABLE exercise_media(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    media_id INTEGER NOT NULL UNIQUE,
    exercise_id INTEGER NOT NULL UNIQUE,
    FOREIGN KEY (media_id) REFERENCES media(id),
    FOREIGN KEY (exercise_id) REFERENCES exercises(id)
);
