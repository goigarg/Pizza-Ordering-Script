<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary Key Name
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

}
