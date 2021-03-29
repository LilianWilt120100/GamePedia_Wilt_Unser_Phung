<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $table = 'theme';
    protected $primaryKey = 'id';
    public $timestamps = false ;
}