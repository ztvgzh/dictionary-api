<?php


namespace App\Models;


class Word extends \Illuminate\Database\Eloquent\Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value',
        'transkription',
        'bridge_id',
        'language_id',
        'synonym_id',
        'description',
    ];



}
