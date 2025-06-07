<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favourite extends Model
{

    protected $guarded = ["user_id"];
    

    public function user():BelongsTo{
        return $this->belongsTo(User::class, "id", "user_id");
    }

    public function document():BelongsTo {
        return $this->belongsTo(Document::class, "id", "document_id");
    }
}
