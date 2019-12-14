const mysql = require('mysql');
const express = require('express');
var js2xmlparser = require("js2xmlparser");
var app = express();
const bodyparser = require('body-parser');
app.use(bodyparser.json());

var mysqlConnection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'premierleague',
    multipleStatements: true
});

mysqlConnection.connect((err) => {
    if (!err)
        console.log('DB connection succeded.');
    else
        console.log('DB connection failed \n Error : ' + JSON.stringify(err, undefined, 2));
});


app.listen(3000, () => console.log('Express server is runnig at port no : 3000'));

//Get all employees
app.get('/players', (req, res) => {
    mysqlConnection.query('SELECT * FROM players', (err, rows, fields) => { 
        if (!err)
            res.send(rows);
        else
            console.log(err);  
    })
});

//Get all matches
app.get('/matches', (req, res) => {
    mysqlConnection.query('SELECT * FROM matches', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all teams
app.get('/teams', (req, res) => {
    mysqlConnection.query('SELECT * FROM teams', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all actions
app.get('/actions', (req, res) => {
    mysqlConnection.query('SELECT * FROM actions', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});