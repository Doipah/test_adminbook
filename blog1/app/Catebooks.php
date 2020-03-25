<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catebooks extends Model
{

    protected $table = 'catebookss';

    protected $fillable = [
     'code_book','name_catebook'
       ];
}
