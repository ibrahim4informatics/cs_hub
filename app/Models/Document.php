<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    

    public function owner():BelongsTo {
        return $this->belongsTo(User::class, "owner_id", "id");
    }

    public function module():BelongsTo {
        return $this->belongsTo(Module::class, "module_id", "id");
    }


}
