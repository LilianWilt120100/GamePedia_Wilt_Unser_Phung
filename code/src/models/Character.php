<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
protected $table = 'character';
protected $primaryKey = 'id';
public $timestamps = false ;
}