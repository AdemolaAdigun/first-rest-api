# DOCUMENTATION

## Assignment

Nowadays, offering data can be seen as a service. You have worked with these services multiple times as a student. The weather station in C#1 and the final assignment of PHP1 are examples of applications that use (consume) a service that offers data. We call this service an Application Programming Interface or API. This data often gets send by using RESTful calls. REST stands for REprestentational State Tranfer and is often used to create API’s. The assignment for  this course it to create a API based on the REST principle, XML and JSON. In addition, you will need to visualize the data you offer in a clear and thought out manner.

## My Solution

I decided to create a Restful service to serve data from a fictional football (soccer) tournament. I manually created my dataset consisting of 4 tables namely: Matches.sql, player.sql, actions.sql and teams.sql (see folder db). My goal is to present data of all the legs(home and away) of the different matche/score-line that took place at the tournament (i.e. Real Madrid 3 v Barcelona 1) and also be able to present player data per team from each of these different matches and legs(home and away) to the client. My api will also have RESTful functionalities like GET, POST, DELETE and PUT to be able to manipulate the data in the database.

I used Node.js to create my API and PHP to create my client consuming the API. I also made use of the following packages:

1. mysql (API)
2. express (API)
3. js2xmlparser (API)
4. composer(client)

## Data Visualization

I chose to represent my data on the client side using a tables because it is clear and provides easily understandable data to the user. Using table to represent football data is nothing new but rather a traditional way of representing data because of the magnitude of figures involved. A table facilitates representation of even large amounts of data in an attractive, easy to read and organized manner (toppr, 2016). 

## Setup

1. download and install Nodejs version 13.6.0
2. download and install Visual studio code
3. download and install postman for testing
4. download and install XAMPP to host local database
5. clone this repository
6. import .../db/premierleague.sql to local server
7. open .../football-api folder in VS code
8. open file index.js in VS code
9. press "ctrl" + "`" to launch terminal
10. start xampp and turn on Apache and MySQL services
11. insert "node index.js" in terminal and press enter to start running API
12. download PHP server extension
13. open PHP server extensions settings and set port number to 8080
14. Run php client file "Matches.php" with visual studio code PHP server extension

#### Validation

1. Matches page XML is validated by .../xsd/schema1.xsd
2. Matches page XML is validated by .../xsd/schema1.xsd
3. Matches page JSON is validated by .../js/schema1.json
4. Teams page JSON is validated by  .../js/schema2.json

## References

toppr.(2016). Textual And Tabular Presentation Of Data. Retrieved from https://www.toppr.com/guides/economics/presentation-of-data/textual-and-tabular-presentation-of-data/
 
