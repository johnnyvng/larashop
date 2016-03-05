<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id'; //explicitly defines the primary key field name
   	protected $table = 'categories'; // explicitly defines the name of the table
//	public $timestamps = false; // tells Eloquent ORM model not to consider create_at and updated_at table fields
   	protected $fillable = array('name', 'created_at_ip', 'updated_at_ip');
}

/*
	namespace App; defines the model namespace
	class Category extends BaseModel defines the category class that extends the BaseModel
	protected $primaryKey = 'id'; explicitly defines the primary key field name. The default is id so in this case it’s not really necessary to specify it. Personally I prefer setting the name explicitly.
	protected $table = 'categories'; explicitly defines the table name. The default is the plural form of the model name.
	protected $fillable = array('name', 'createdatipp', 'updatedatip'); defines field names that can be mass assigned. This is a security measure that ensures only authorized fieldnames are affected.

*/
