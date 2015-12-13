var mysql = require("mysql");

module.exports =  {
    blank: function(){ return {} },
    get: function(id,Users_id, ret){
        var conn = GetConnection();
        var sql = 'SELECT * FROM FitFriend_Meals ';
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
        conn.query("DELETE FROM FitFriend_Meals WHERE id = " + id, function(err,rows){
          ret(err);
          conn.end();
        });        
    },
    save: function(row, ret){
        var sql;
        var conn = GetConnection();
        //  TODO Sanitize
        if (row.id) {
				  sql = " Update FitFriend_Meals "
							+ " Set Name= ? "
							+ "Set Calories=? "
							+ "Set Fat=? "
							+ "Set Carbs=?"
							+ "Set Fiber=?"
							+ "Set When =? "
						  + " WHERE Users_id = ? ";
			  }else{
				  sql = "INSERT INTO FitFriend_Meals "
						  + " (Name, Calories, Fat, Carbs, Fiber, Date, created_at, Users_id) "
						  + "VALUES (?, ?, ?, ?, ?, ?, Now(),Users_id ) ";				
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