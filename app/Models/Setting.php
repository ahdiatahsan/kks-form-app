<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'period'
    ];

    public function introductions()
    {
        return $this->hasMany(Introduction::class);
    }

    public function conclusions()
    {
        return $this->hasMany(Conclusion::class);
    }
}
