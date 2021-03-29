<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Game_rating extends Model
{
    protected $table = 'game_rating';
    protected $primaryKey = 'id';
    public $timestamps = false ;
}