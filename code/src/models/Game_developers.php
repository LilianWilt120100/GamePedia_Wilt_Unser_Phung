<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Game_developers extends Model
{
    protected $table = 'game_developpers';
    protected $primaryKey = ['game_id','comp_id'];
    public $timestamps = false ;
}