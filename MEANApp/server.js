var express = require('express');
var app = express();
var PORT = process.env.PORT||8080


var router = express.Router();
var appRoutes = require('./app/routes/api')(router);//tells the server to Use the router objecct of the given file


var path = require('path');


var bodyParser = require('body-parser');//A middleware that parses the data in json format
app.use( bodyParser.json() );       // to support JSON-encoded bodies
app.use(bodyParser.urlencoded({extended: true}));   // to support URL-encoded bodies


app.use(express.static(__dirname +'/public'));  //the front end is going to have access to this folder only

var morgan = require('morgan'); //it is a middleware to log all requests
app.use(morgan('dev'));


app.use('/api',appRoutes);


var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost:27017/meantut',function (err) {
    if(err)
    {
        console.log('Not connected to database' + err);
    }else{
        console.log('Connected Successfully');
    }
});// [mongodb://PORT_ON_WHICH_MONGO_IS RUNNING/DATABASE_NAME]


app.get('*',function(req,res) {
    res.sendFile(path.join(__dirname +'/public/app/views/index.html'));
});



//app.get('/',function(req,res){
//   res.send('Hello World');
//});
//This was just for test purposes. It receives a request of form '/' from browser and the sends it the result


//To stop from running the server again and again, we'll do a bit of change
//install nodemon if not done [npm install -g nodemon]
//then nodemon server.js



//http://localhost:8080/users
//Obtaining data via post




app.listen(PORT,function () {
    console.log("Running on port " + PORT);
});