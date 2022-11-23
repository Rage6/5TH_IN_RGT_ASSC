<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Conflict;

class Casualty extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'middle_name',
      'last_name',
      'rank',
      'place',
      'injury_type',
      'city',
      'state',
      'burial_site',
      'day_of_death',
      'month_of_death',
      'year_of_death',
      'comments',
      'unit',
      'photo',
      'conflict_id',
      'member_id',
      'when_displayed'
    ]
}
