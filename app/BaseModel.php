<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BaseModel extends Model
{
	public function selectQuery($sql_stmt) {
		return DB::select($sql_stmt);
	}

	public function sqlStatement($sql_stmt) {
		return DB::statement($sql_stmt);
	}

}


/*
    namespace App; defines the namespace for our base model
    use Illuminate\Database\Eloquent\Model; imports the Eloquent ORM model
    use DB; imports the DB namespace
    public function selectQuery($sqlstmt) { return DB::select($sqlstmtt); } defines a public function selectQuery($sql_stmt). $sqlstmt is a string parameter that contains the SQL statement to be executed. DB::select($sqlstmt) executes the SQL statement
    public function sqlStatement($sqlstmt) { DB::statement($sqlstmtt); } defines a public function sqlStatement. $sqlstmt is a string parameter that contains the SQL statement to be executed. DB::statement($sqlstmt) executes the SQL statement

*/