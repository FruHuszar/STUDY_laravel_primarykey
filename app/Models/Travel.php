<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'flight_id', 'evaluation'])]

class Travel extends Model
{
    /** @use HasFactory<\Database\Factories\TravelFactory> */
    use HasFactory;

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('user_id', '=', $this->getAttribute('user_id'))
            ->where('flight_id', '=', $this->getAttribute('flight_id'));
        return $query;
    }
}
