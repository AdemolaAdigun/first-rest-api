// Declaring all packages used */
const mysql = require('mysql');
const express = require('express');
var js2xmlparser = require("js2xmlparser");
var app = express();
const bodyparser = require('body-parser');
app.use(bodyparser.json());

// Creating MYSQL connection */
var mysqlConnection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'premierleague',
    multipleStatements: true
});

// Checking MYSQL connection */
mysqlConnection.connect((err) => {
    if (!err)
        console.log('DB connection succeded.');
    else
        console.log('DB connection failed \n Error : ' + JSON.stringify(err, undefined, 2));
});

/* Assigning port 3000 to be used */
app.listen(3000, () => console.log('Express server is runnig at port no : 3000'));


/* Routes */
app.get('/matches', (req, res) => {
    mysqlConnection.query('SELECT MatchID, TeamHomeID, TeamHomeFormation, ResultOfTeamHome, TeamID, TeamName FROM matches INNER JOIN teams ON matches.TeamHomeID = teams.TeamID UNION SELECT MatchID, TeamAwayID, TeamAwayFormation, ResultOfTeamAway, TeamID, TeamName FROM matches INNER JOIN teams ON matches.TeamAwayID = teams.TeamID ORDER BY MatchID;', (err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//Get all matches XML
app.get('/matchesXML', (req, res) => {
    mysqlConnection.query('SELECT MatchID, TeamHomeID, TeamHomeFormation, ResultOfTeamHome, TeamID, TeamName FROM matches INNER JOIN teams ON matches.TeamHomeID = teams.TeamID UNION SELECT MatchID, TeamAwayID, TeamAwayFormation, ResultOfTeamAway, TeamID, TeamName FROM matches INNER JOIN teams ON matches.TeamAwayID = teams.TeamID ORDER BY MatchID;', (err, rows, fields) => {
        if (!err){
            res.send(js2xmlparser.parse("matches",rows));
        }
        else
            console.log(err);
    })
});

app.post('/addTeam/:name',  (req, res) => {
    mysqlConnection.query('INSERT INTO teams (Name) VALUES (?)',[req.params.name],(err, rows, fields) => {
        if (!err){
            console.log("Team added!");
        }
        else
            console.log(err);
    })
});

app.delete('/deleteTeam/:name', (req, res) => {
     mysqlConnection.query('DELETE FROM teams WHERE Name = ?',[req.params.name],(err, rows, fields) => {
        if (!err){
            console.log("Team removed!");
        }
        else
            console.log(err);
    })
});

//GET protocol data returned as JSON
app.get('/:team', (req, res) => {
    mysqlConnection.query('SELECT Name, Goals, Shots, ShotsOnTarget, Fouls, YellowCards, RedCards, Passes, Dribbles, Tackles, Saves FROM premierleague.actions join players on actions.PlayerID = players.PlayerID join teams on teams.TeamID = actions.TeamID where TeamName = ?;', [req.params.team],(err, rows, fields) => {
        if (!err)
            res.send(rows);
        else
            console.log(err);
    })
});

//GET protocol data returned as XML
app.get('/:team/XML', (req, res) => {
    mysqlConnection.query('SELECT Name, Goals, Shots, ShotsOnTarget, Fouls, YellowCards, RedCards, Passes, Dribbles, Tackles, Saves FROM premierleague.actions join players on actions.PlayerID = players.PlayerID join teams on teams.TeamID = actions.TeamID where TeamName = ?;', [req.params.team],(err, rows, fields) => {
        if (!err)
        res.send(js2xmlparser.parse("team",rows));
        else
            console.log(err);
    })
});

