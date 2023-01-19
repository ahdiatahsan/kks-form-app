<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteFive extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'question',
        'answer',
        'score',
        'attachment_pdf',
        'attachment_img',
        'note',
        'user_id',
        'setting_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }
}
