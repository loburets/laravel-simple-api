<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    const SUSPENDED_STATUS = 'suspended';

    const STATUSES = [
        self::ACTIVE_STATUS,
        self::INACTIVE_STATUS,
        self::SUSPENDED_STATUS,
    ];

    /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'name',
        'description',
        'status',
        'free_shipping',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'status',
        'free_shipping',
    ];
}
