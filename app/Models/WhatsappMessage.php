<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappMessage extends Model
{
    use HasFactory;

       protected $fillable = ['message_body', 'attachments'];

    protected $casts = [
        'attachments' => 'array',
    ];

    public function persons()
    {
        return $this->belongsToMany(Person::class, 'message_person', 'message_id', 'person_id');
    }
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

}