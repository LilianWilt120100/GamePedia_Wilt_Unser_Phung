<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    protected $table = 'friends';
    protected $primaryKey = ['char1_id','char2_id'];
    public $timestamps = false ;
}