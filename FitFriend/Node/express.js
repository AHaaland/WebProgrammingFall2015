var express = require('express'),
    app = express(),
    person = require("./Model/person");

app.use(express.static(__dirname + '/public'));
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
  person.get(null, function(rows){
    res.send(rows);
  })
    
})
.get("/food/:id", function(req, res){
  person.get(req.params.id, function(rows){
    res.send(rows[0]);
  })
});
app.get("/exercise", function(req, res){
  person.get(null, function(rows){
    res.send(rows);
  })
    
})
.get("/exercise/:id", function(req, res){
  person.get(req.params.id, function(rows){
    res.send(rows[0]);
  })
});
app.listen(process.env.PORT);