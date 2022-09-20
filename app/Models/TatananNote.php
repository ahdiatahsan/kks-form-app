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
}
