<?php

namespace App\Models\ChatBotApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatBot extends Model
{
    use HasFactory;


    protected $table = "chat_bots";


    protected $fillable = [
        'question',
        'answer'

    ];
}
