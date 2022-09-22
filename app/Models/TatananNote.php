<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TatananNote extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'tatananone_id',
        'tatanantwo_id',
        'tatananthree_id',
        'tatananfour_id',
        'tatananfive_id',
        'tatanansix_id',
        'tatananseven_id',
        'tatananeight_id',
        'tatanannine_id',
        'note',
    ];

    public function tatanan_ones()
    {
        return $this->belongsTo(TatananOne::class);
    }

    public function tatanan_twos()
    {
        return $this->belongsTo(TatananTwo::class);
    }

    public function tatanan_threes()
    {
        return $this->belongsTo(TatananThree::class);
    }

    public function tatanan_fours()
    {
        return $this->belongsTo(TatananFour::class);
    }

    public function tatanan_fives()
    {
        return $this->belongsTo(TatananFive::class);
    }

    public function tatanan_sixes()
    {
        return $this->belongsTo(TatananSix::class);
    }

    public function tatanan_sevens()
    {
        return $this->belongsTo(TatananSeven::class);
    }

    public function tatanan_eights()
    {
        return $this->belongsTo(TatananEight::class);
    }

    public function tatanan_nines()
    {
        return $this->belongsTo(TatananNine::class);
    }
}
