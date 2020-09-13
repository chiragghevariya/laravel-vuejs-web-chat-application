<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Reply;

class Message extends Model
{
	protected $table ='messages'; 
    use HasFactory;

    /**
     * [replies This function is used to get all replay messages]
     * @return [type] [description]
     */
    public function replies(){

    	return $this->hasMany('App\Reply','id','message_id');
    }
}
