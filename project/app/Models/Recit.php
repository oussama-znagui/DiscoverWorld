<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recit extends Model
{
    use HasFactory;
    protected $fillable = [
        "titre",
        "description",
        "destination_id",
        "conseil"
    ];
    protected $with = ["destination"];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
