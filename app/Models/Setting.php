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

    //

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
    
    //

    public function note_ones()
    {
        return $this->hasMany(NoteOne::class);
    }

    public function note_twos()
    {
        return $this->hasMany(NoteTwo::class);
    }

    public function note_threes()
    {
        return $this->hasMany(NoteThree::class);
    }

    public function note_fours()
    {
        return $this->hasMany(NoteFour::class);
    }

    public function note_fives()
    {
        return $this->hasMany(NoteFive::class);
    }

    public function note_sixes()
    {
        return $this->hasMany(NoteSix::class);
    }

    public function note_sevens()
    {
        return $this->hasMany(NoteSeven::class);
    }

    public function note_eights()
    {
        return $this->hasMany(NoteEight::class);
    }

    public function note_nines()
    {
        return $this->hasMany(NoteNine::class);
    }
}
