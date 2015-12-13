var express = require('express');
    var app = express();
    var bodyParser = require('body-parser');
    var session = require('express-session');    
    var person = require("./Model/person");
    var food = require("./Model/food");
    var exercise = require("./Model/exercise");
    var unirest = require('unirest');    
    app.use(express.static(__dirname + '/public'));
    app.use(bodyParser.urlencoded({ extended: false }));
    app.use(bodyParser.json());
    app.use(session({ secret: 'FITFRIENDTRACKING' }));
//==================================================================
app.get("/person", function(req, res) 
{
  if (!req.session.user )  
  {
    res.status(302).send("Error. You do not have permission to access the page");
    return;   
  }
  person.get(null, function(err, rows)
  {
    if (err)
    {
        res.status(500).send(err);
    }
    else
    {
        res.send(rows);
    }
  })
})
.get("/person/:id", function(req, res)
{
  person.get(req.params.id, function(rows)
  {
    res.send(rows[0]);
  })
})
.post("/person", function(req, res){
  var errors = person.validate(req.body);
  if(errors){
    res.status(500).send(errors);
    return;
  }
  person.save(req.body, function(err, row){
      if(err)
      {
        res.status(500).send(err);
        return;
      }
    res.send(row);
  })
})
.delete("/person/:id", function(req, res){    
  
  person.delete(req.params.id, function(err, rows){ 
      if(err)
      {
        res.status(500).send(err);
      }
      else
      {
        res.send(req.params.id);
      }
  })
});

app.get("/food", function(req, res)  
{
  food.get(null, req.session.user.persons_id, function(err, rows)  
  {
    if (err)
    {
  
        res.status(500).send(err);
    }
    else
    {
        res.send(rows);
    }
  })
})
.get("/food/:id", function(req, res)
{
  food.get(req.params.id, req.session.user.persons_id, function(rows)
  {
    res.send(rows[0]);
  })
})
.post("/food", function(req, res){
  var errors = food.validate(req.body);
  if(errors){
    res.status(500).send(errors);
    return;
  }

  food.save(req.body, req.session.user.persons_id, function(err, row){    
      if(err)
      {
        res.status(500).send(err);
        return;
      }
    res.send(row);
  })
})
.delete("/food/:id", function(req, res){   
  
  food.delete(req.params.id, function(err, rows){  
      if(err)
      {
        res.status(500).send(err);
      }
      else
      {
        res.send(req.params.id);
      }
  })
});


app.get("/exercise", function(req, res){
  exercise.get(null, req.session.user.persons_id, function(err, rows)
  {
    if (err)
    {

        res.status(500).send(err);
    }
    else
    {
        res.send(rows);
    }
  })
})
.get("/exercise/:id", function(req, res){
  exercise.get(req.params.id, req.session.user.persons_id, function(err, rows)
  {
    res.send(rows[0]);
  })
})
.post("/exercise", function(req, res){
  var errors = exercise.validate(req.body);
  if(errors){
    res.status(500).send(errors);
    return;
  }
  
exercise.save(req.body, req.session.user.persons_id, function(err, row){
      if(err)
      {
        res.status(500).send(err);
        return;
      }
    res.send(row);
  })
})
.delete("/exercise/:id", function(req, res){
  exercise.delete(req.params.id, function(err, rows){
      if(err){
        res.status(500).send(err);
      }else{
        res.send(req.params.id);
      }
  })
})

.get("/user/", function(req, res){
    unirest.get("https://graph.facebook.com/me?access_token=" + req.params.access_token + "&fields=id,name,email")
    .end(function (result) {
        res.send(result.body);
    });
})


.post("/login", function(req, res){
    unirest.get("https://graph.facebook.com/me?access_token=" + req.body.access_token + "&fields=id,name,email")
    .end(function (result) {
        var fbUser = req.session.fbUser = JSON.parse(result.body);
        fbUser.access_token = req.body.access_token;
        person.get(fbUser.id, function(err, rows) {
            if(rows && rows.length){                           
                req.session.user = rows[0];
            }else{                                          
                person.save({ firstname: fbUser.name, fbid: fbUser.id}, function(err, row) {
                    req.session.user = row;
                })
            }
            res.send(result.body);
        }, 'facebook');  
        
    });
})

.get("/fbUser", function(req, res){
    res.send(req.session.fbUser);
})
.get("/user", function(req, res){
    res.send(req.session.user);
});

app.listen(process.env.PORT);