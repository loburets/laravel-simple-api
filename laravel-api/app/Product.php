<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    const SUSPENDED_STATUS = 'suspended';

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
}
