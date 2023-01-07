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

    public function fundings()
    {
        return $this->hasMany(Funding::class);
    }

    public function institutional_builders()
    {
        return $this->hasMany(InstitutionalBuilder::class);
    }

    public function institutional_kks()
    {
        return $this->hasMany(InstitutionalKks::class);
    }

    public function institutional_districts()
    {
        return $this->hasMany(InstitutionalDistrict::class);
    }

    public function institutional_villages()
    {
        return $this->hasMany(InstitutionalVillage::class);
    }
}
