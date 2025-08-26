<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
   protected $table = 'persons';
 protected $fillable = ['person_name', 'phone_number'];

    public function messages()
    {
        return $this->belongsToMany(WhatsappMessage::class, 'message_person', 'person_id', 'message_id');
    }
}

