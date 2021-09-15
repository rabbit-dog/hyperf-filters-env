<?php

namespace Filter\TestClass;


use Hyperf\Database\Model\Model;

class Location extends Model
{
    protected $fillable = ['name'];

    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
