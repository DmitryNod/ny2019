<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $fillable = [
        'first_name', 'last_name',
        'wishFor', 'wish', 'email', 'status'
    ];
    protected $table = 'wishes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function scopePopular($query) {
        return $query->where('rating', '>', 100);
    }

    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }
}
