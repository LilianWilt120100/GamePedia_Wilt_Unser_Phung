<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Ennemies extends Model
{
    protected $table = 'enemies';
    protected $primaryKey = ['char1_id','char2_id'];
    public $timestamps = false ;
}