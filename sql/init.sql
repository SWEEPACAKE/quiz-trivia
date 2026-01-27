CREATE TABLE scores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100),
    score INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
