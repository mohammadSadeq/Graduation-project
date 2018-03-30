<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{

    public $table = 'contact';

    public $fillable = ['cname','cemail','LogoName','Logoimage','modelName','comment'];

}