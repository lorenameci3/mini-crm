<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\Contact;

class Deal extends Model
{
    use HasFactory;
    protected $table = 'deals';
    protected $primaryKey = 'id';

    public function getAccountDetail(){
        return $this->hasOne(Account::class, 'id', 'account_id');
    }

    public function getContactDetail(){
        return $this->hasOne(Contact::class, 'id', 'contact_id');
    }
}
