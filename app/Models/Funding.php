<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'attachment_pdf',
        'attachment_img',
        'description',
        'date_activity',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
