<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Game2Platform extends Model
{
    protected $table = 'game2platform';
    protected $primaryKey = ['game_id','platform_id'];
    public $timestamps = false ;
}