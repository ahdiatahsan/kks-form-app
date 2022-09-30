<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionalVillage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'description',
        'attachment_pdf',
        'attachment_img',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
