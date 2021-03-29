<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Game2Character extends Model
{
    protected $table = 'game2character';
    protected $primaryKey = ['game_id','character_id'];
    public $timestamps = false ;
}