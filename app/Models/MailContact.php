<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class MailContact extends Model
{
    protected $fillable = ['name', 'email', 'message'];

}
