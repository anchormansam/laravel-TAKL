<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    {
        return $this->hasOne('App\TransactionType');
    }
}
