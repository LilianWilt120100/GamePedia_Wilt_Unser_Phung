<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Game2Theme extends Model
{
    protected $table = 'game2theme';
    protected $primaryKey = ['game_id','theme_id'];
    public $timestamps = false ;
}