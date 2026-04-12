<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\UserFactory;

class MessageAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        "message_id",
        "name",
        "path",
        "mime",
        "size",
    ];
}
