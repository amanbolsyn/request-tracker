<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory; 
    
    protected $table = 'tickets';

    protected $guarded = [];

    public const CATEGORIES = ['problem', 'request for information', 'incident', 'service request', 'change']; 
    public  const STATUS_LEVELS = ['new','in progress','completed','rejected'];
    public  const PRIORATY_LEVELS = ['low', 'medium', 'critical'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
