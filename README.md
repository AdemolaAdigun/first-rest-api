# Assignment

Nowadays, offering data can be seen as a service. You have worked with these services multiple times as a student. The weather station in C#1 and the final assignment of PHP1 are examples of applications that use (consume) a service that offers data. We call this service an Application Programming Interface or API. This data often gets send by using RESTful calls. REST stands for REprestentational State Tranfer and is often used to create API’s. The assignment for  this course it to create a API based on the REST principle, XML and JSON. In addition, you will need to visualize the data you offer in a clear and thought out manner.

# My Solution

I decided to create a Restful service to serve data from a fictional football (soccer) tournament. I manually created my dataset consisting of 4 tables namely: Matches.sql, player.sql, actions.sql and teams.sql (see folder db). My goal is to present data of all the legs(home and away) of the different matche/score-line that took place at the tournament i.e. Real Madrid 3 v Barcelona 1 and also be able to present player data per team at each of these different matches and legs(home and away) when my api is being visualized from the client. My api will also have RESTful functionalities like GET, POST, DELETE and PUT to be able to manipulate the data in the database as you wish.

# Data Visualization

I chose to represent my data on the client side using a tables because it is clear and provides easily understandable data to the user. Using table to represent football data is nothing new but rather a traditional way of representing data because of the magnitude of figures. A table facilitates representation of even large amounts of data in an attractive, easy to read and organized manner (toppr, 2016). 

# Setup

1. download and install Nodejs version 13.6.0
2. download and install Visual studio code
3. download and install postman for testing and json validation
4. download and install XAMPP to host local database
5. clone this repository to C:\xampp\htdocs
6. open folder in VS code
7. open file index.js
8. press "ctrl" + "`" to launch terminal
9. insert "node index.js" in terminal to start running API
10. start xampp and turn on Apache and MySQL services
11. Run php client file "Matches.php"

### Validation

1. Matches page XML is validated by xsd file in xsd folder (.../xsd/schema1.xsd)
2. Matches page XML is validated by xsd file in xsd folder (.../xsd/schema1.xsd)
3. Matches page JSON can be validated by copying code in .../json_schema/matches.js and pasting it in tests in postman
4. Teams page JSON can be validated by copying code in .../json_schema/teams.js and pasting it in tests in postman

# References

toppr.(2016). Textual And Tabular Presentation Of Data. Retrieved from https://www.toppr.com/guides/economics/presentation-of-data/textual-and-tabular-presentation-of-data/
