<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Game2Rating extends Model
{
    protected $table = 'game2rating';
    protected $primaryKey = ['game_id','rating_id'];
    public $timestamps = false ;
}