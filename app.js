const express = require('express');
const mysql = require('mysql');
const multer = require('multer');
const app = express();
const upload = multer();

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'csdept'
});

app.post('/nn', upload.single('pdfFile'), (req, res) => {
    const pdfFile = req.file;

    // Store pdfFile in MySQL database using connection.query()

    res.send('File uploaded and processed successfully.');
});

const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
