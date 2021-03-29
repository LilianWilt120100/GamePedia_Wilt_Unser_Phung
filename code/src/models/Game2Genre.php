<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Game2Genre extends Model
{
    protected $table = 'game2genre';
    protected $primaryKey = ['game_id','genre_id'];
    public $timestamps = false ;
}