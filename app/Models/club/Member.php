<?php

namespace App\Models\club;

use App\Models\Club;
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
        return $this->belongsTo(MemberType::class);
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
