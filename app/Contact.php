<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact";
    protected $primaryKey = "contact_id";
    protected $fillable = ["contact_name", "contact_email", "contact_description"];
}
