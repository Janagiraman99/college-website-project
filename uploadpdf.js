const express = require('express');
const multer = require('multer');
const mysql = require('mysql');

const app = express();
const port = 3000;

const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'csdept'
});

db.connect();

const storage = multer.memoryStorage();
const upload = multer({ storage: storage });

app.post('/upload', upload.single('pdf'), (req, res) => {
    const file = req.file;
    const fileName = file.originalname;
    const fileType = file.mimetype;
    const fileData = file.buffer;

    db.query('INSERT INTO pdf_files (file_name, file_type, file_data) VALUES (?, ?, ?)',
        [fileName, fileType, fileData], (err, result) => {
            if (err) throw err;
            res.send('File uploaded to database');
        });
});

app.get('/pdf/:id', (req, res) => {
    const fileId = req.params.id;

    db.query('SELECT * FROM pdf_files WHERE id = ?', [fileId], (err, result) => {
        if (err) throw err;

        if (result.length > 0) {
            const file = result[0];
            res.setHeader('Content-Type', file.file_type);
            res.send(file.file_data);
        } else {
            res.status(404).send('File not found');
        }
    });
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
