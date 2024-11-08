<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Results extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'patientNo',
        'requestNo',
        'hematocrit',
        'hgb',
        'neutro',
        'lympho',
        'mono',
        'eosino',
        'baso',
        'cbcWbc',
        'cbcRbc', 
        'platelet', 
        'bloodType',
        'cbcRemarks', 
        'uaColor', 
        'transparency', 
        'ph',
        '',
        '',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
    ];
}
