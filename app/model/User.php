<?php namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'users';
	protected $fillable = ['firstname', 'lastame', 'email','tel','password'];

}
