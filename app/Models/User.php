<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'contact_person',
        'district_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fundings()
    {
        return $this->hasMany(Funding::class);
    }

    public function tatanan_ones()
    {
        return $this->hasMany(TatananOne::class);
    }

    public function tatanan_twos()
    {
        return $this->hasMany(TatananTwo::class);
    }

    public function tatanan_threes()
    {
        return $this->hasMany(TatananThree::class);
    }

    public function tatanan_fours()
    {
        return $this->hasMany(TatananFour::class);
    }

    public function tatanan_fives()
    {
        return $this->hasMany(TatananFive::class);
    }

    public function tatanan_sixes()
    {
        return $this->hasMany(TatananSix::class);
    }

    public function tatanan_sevens()
    {
        return $this->hasMany(TatananSeven::class);
    }

    public function tatanan_eights()
    {
        return $this->hasMany(TatananEight::class);
    }

    public function tatanan_nines()
    {
        return $this->hasMany(TatananNine::class);
    }

    //

    public function attachment_ones()
    {
        return $this->hasMany(AttachmentOne::class);
    }

    public function attachment_twos()
    {
        return $this->hasMany(AttachmentTwo::class);
    }

    public function attachment_threes()
    {
        return $this->hasMany(AttachmentThree::class);
    }

    public function attachment_fours()
    {
        return $this->hasMany(AttachmentFour::class);
    }

    public function attachment_fives()
    {
        return $this->hasMany(AttachmentFive::class);
    }

    public function attachment_sixes()
    {
        return $this->hasMany(AttachmentSix::class);
    }

    public function attachment_sevens()
    {
        return $this->hasMany(AttachmentSeven::class);
    }

    public function attachment_eights()
    {
        return $this->hasMany(AttachmentEight::class);
    }

    public function attachment_nines()
    {
        return $this->hasMany(AttachmentNine::class);
    }

    //

    public function attachment_one_nds()
    {
        return $this->hasMany(AttachmentOneNd::class);
    }

    public function attachment_two_nds()
    {
        return $this->hasMany(AttachmentTwoNd::class);
    }

    public function attachment_three_nds()
    {
        return $this->hasMany(AttachmentThreeNd::class);
    }

    public function attachment_four_nds()
    {
        return $this->hasMany(AttachmentFourNd::class);
    }

    public function attachment_five_nds()
    {
        return $this->hasMany(AttachmentFiveNd::class);
    }

    public function attachment_six_nds()
    {
        return $this->hasMany(AttachmentSixNd::class);
    }

    public function attachment_seven_nds()
    {
        return $this->hasMany(AttachmentSevenNd::class);
    }

    public function attachment_eight_nds()
    {
        return $this->hasMany(AttachmentEightNd::class);
    }

    public function attachment_nine_nds()
    {
        return $this->hasMany(AttachmentNineNd::class);
    }
}
