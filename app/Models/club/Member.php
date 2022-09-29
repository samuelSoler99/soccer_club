<?php

namespace App\Models\club;

use App\Models\Club;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'member';

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function getMembersByClubId(int $id){
        return $this
            ->select(['*'])
            ->where('club_id', $id)
            ->get();
    }
}
