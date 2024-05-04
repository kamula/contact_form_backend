<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contact extends Model
{
    use HasFactory;
    // Disable auto-incrementing as we'll use UUIDs
    public $incrementing = false;

    // Specify that the key is a string (for UUID)
    protected $keyType = 'string';

    // Automatically cast `dateCreated` as a datetime
    protected $casts = [
        'dateCreated' => 'datetime',
    ];

    // List of fields that are mass assignable
    protected $fillable = ['fullName', 'email', 'message'];

    // Boot function to assign UUID on model creation
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // This ensures that id is set only if it's not already present
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
