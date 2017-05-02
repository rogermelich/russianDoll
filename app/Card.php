<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    Use Cacheable;

    /**
     * A card can have many notes.
     */
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
