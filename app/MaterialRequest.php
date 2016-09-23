<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialRequest extends Model
{
    use Numbering;

    protected $fillable = [
        'number', 'user_id',
    ];

    public function details()
    {
        return $this->hasMany(MaterialRequestDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
