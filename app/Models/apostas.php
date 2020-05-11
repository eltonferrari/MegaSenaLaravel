<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apostas extends Model
{
    public $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'aposta',
        'date',
        'n1',
        'n2',
        'n3',
        'n4',
        'n5',
        'n6',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];
    protected $table = 'posts';
}
}
