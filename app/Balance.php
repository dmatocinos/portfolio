<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public function accounts()
    {
    	return $this->hasOne('App\Account');
    }
}
