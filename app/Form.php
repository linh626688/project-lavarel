<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{

    protected $table = 'bangdiem';
    protected $filltable = ['year', 'season', 'idclass', 'subject', 'file'];
    public $timestamps = false;
}
