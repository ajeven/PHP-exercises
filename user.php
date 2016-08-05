<?php
require_once 'model.php';

class User extends Model
{
	protected static $table = 'User';


}

echo User::getTable() . "\n";