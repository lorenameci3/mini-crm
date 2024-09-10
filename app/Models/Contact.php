<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';

    public function getAccountDetail(){
        return $this->hasOne(Account::class, 'id', 'account_id');
    }
}
