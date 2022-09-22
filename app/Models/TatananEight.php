<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TatananEight extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13',
        'p14',
        'p15',
        'p16',
        'p17',
        'p18',
        'p19',
        'p20',
        'p21',
        'p22',
        'p23',
        'p24',
        'p25',
        'p26',
        'p27',
        'p28',
        'p29',
        'p30',
        'p31',
        'p32',
        'p33',
        'p34',
        'user_id'
    ];

    public function tatanan_notes()
    {
        return $this->hasMany(TatananNote::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
