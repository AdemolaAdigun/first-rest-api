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

// Get all employees
// app.get('/players', (req, res) => {
//     mysqlConnection.query('SELECT * FROM players', (err, rows, fields) => { 
//         if (!err)
//             res.send(rows);
//         else
//             console.log(err);  
//     })
// });

//Get all matches
app.get('/matches', (req, res) => {
    mysqlConnection.query('SELECT MatchID, TeamHomeID, TeamHomeFormation, ResultOfTeamHome, TeamID, Name FROM matches INNER JOIN teams ON matches.TeamHomeID = teams.TeamID UNION SELECT MatchID, TeamAwayID, TeamAwayFormation, ResultOfTeamAway, TeamID, Name FROM matches INNER JOIN teams ON matches.TeamAwayID = teams.TeamID ORDER BY MatchID;', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all RealMadrid
app.get('/RealMadrid', (req, res) => {
    mysqlConnection.query('SELECT Name, Goals, Shots, ShotsOnTarget, Fouls, YellowCards, RedCards, Passes, Dribbles, Tackles, Saves FROM premierleague.actions inner join players on actions.PlayerID = players.PlayerID where teamID = 1;', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all Barcelona
app.get('/Barcelona', (req, res) => {
    mysqlConnection.query('SELECT Name, Goals, Shots, ShotsOnTarget, Fouls, YellowCards, RedCards, Passes, Dribbles, Tackles, Saves FROM premierleague.actions inner join players on actions.PlayerID = players.PlayerID where teamID = 2;', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all ManC
app.get('/ManchesterCity', (req, res) => {
    mysqlConnection.query('SELECT Name, Goals, Shots, ShotsOnTarget, Fouls, YellowCards, RedCards, Passes, Dribbles, Tackles, Saves FROM premierleague.actions inner join players on actions.PlayerID = players.PlayerID where teamID = 3;', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all Arsenal
app.get('/Arsenal', (req, res) => {
    mysqlConnection.query('SELECT Name, Goals, Shots, ShotsOnTarget, Fouls, YellowCards, RedCards, Passes, Dribbles, Tackles, Saves FROM premierleague.actions inner join players on actions.PlayerID = players.PlayerID where teamID = 4;', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all Liverpool
app.get('/Liverpool', (req, res) => {
    mysqlConnection.query('SELECT Name, Goals, Shots, ShotsOnTarget, Fouls, YellowCards, RedCards, Passes, Dribbles, Tackles, Saves FROM premierleague.actions inner join players on actions.PlayerID = players.PlayerID where teamID = 5;', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all Tottenham
app.get('/Tottenham', (req, res) => {
    mysqlConnection.query('SELECT Name, Goals, Shots, ShotsOnTarget, Fouls, YellowCards, RedCards, Passes, Dribbles, Tackles, Saves FROM premierleague.actions inner join players on actions.PlayerID = players.PlayerID where teamID = 6;', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});
