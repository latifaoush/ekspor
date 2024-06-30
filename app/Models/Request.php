<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'requests'; 
    protected $fillable = ['product', 'quantity', 'status', 'farmer_id'];
    public $timestamps = false;

    public function farmer()
    {
        return $this->belongsTo(User::class, 'farmer_id');
    }
}
