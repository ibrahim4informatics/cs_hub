<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{
    

    public function documents():HasMany{
        return $this->hasMany(Document::class);
    }
}
