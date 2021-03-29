<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Game_publishers extends Model
{
    protected $table = 'game_publishers';
    protected $primaryKey = ['game_id','comp_id'];
    public $timestamps = false ;
}