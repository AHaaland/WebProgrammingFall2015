var express = require('express'),
    app = express(),
    person = require("./Model/person");
    food = require("./Model/food");
    exercise = require("./Model/exercise");

app.use(express.static(__dirname + '/public'));
app.use(express.static(__dirname + '/public/food'));
app.use(express.static(__dirname + '/public/exercise'));
app.get("/person", function(req, res){
  person.get(null, function(rows){
    res.send(rows);
  })
    
})
.get("/person/:id", function(req, res){
  person.get(req.params.id, function(rows){
    res.send(rows[0]);
  })
});
app.get("/food", function(req, res){
  food.get(null, function(rows){
    res.send(rows);
  })
    
})
.get("/food/:id", function(req, res){
  food.get(req.params.id, function(rows){
    res.send(rows[0]);
  })
});
app.get("/exercise", function(req, res){
  exercise.get(null, function(rows){
    res.send(rows);
  })
    
})
.get("/exercise/:id", function(req, res){
  exercise.get(req.params.id, function(rows){
    res.send(rows[0]);
  })
});
app.listen(process.env.PORT);
