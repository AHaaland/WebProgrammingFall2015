var mysql = require("mysql");

module.exports =  {
    blank: function(){ return {} },
    get: function(id, ret){
        var conn = GetConnection();
        var sql = 'SELECT * FROM FitFriend_Exercises ';
        if(id){
          sql += " WHERE id = " + id;
        }
        conn.query(sql, function(err,rows){
          ret(err,rows);
          conn.end();
        });        
    },
    delete: function(id, ret){
        var conn = GetConnection();
        conn.query("DELETE FROM FitFriend_Exercises WHERE id = " + id, function(err,rows){
          ret(err);
          conn.end();
        });        
    },
    save: function(row, ret){
        var sql;
        var conn = GetConnection();
        //  TODO Sanitize
        if (row.id) {
				  sql = " Update FitFriend_Exercises "
							+ " Set Name= ? "
							+ "Set CaloriesBurned=? "
							+ "Set Date =? "
							+ "Set Duration =? "
						  + " WHERE id = ? ";
			  }else{
				  sql = "INSERT INTO FitFriend_Exercises "
						  + " (Name, CaloriesBurned, Date, Duration, created_at, id) "
						  + "VALUES (?, ?, ?, ?, Now(), ?) ";				
			  }

        conn.query(sql, [row.Name, row.id],function(err,data){
          if(!err && !row.id){
            row.id = data.insertId;
          }
          ret(err, row);
          conn.end();
        });        
    },
    validate: function(row){
      var errors = {};
      
      if(!row.Name) errors.Name = "is required"; 
      
      return errors.length ? errors : false;
    }
};  

function GetConnection(){
        var conn = mysql.createConnection({
          host: "localhost",
          user: "drewrob26",
          password: "12321",
          database: "FitFriend_Production"
        });
    return conn;
}