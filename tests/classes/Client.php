<?php

namespace Filter\TestClass;

use Hyperf\Database\Model\Model;
use Rabbit\Filter\Filterable;

class Client extends Model
{
    use Filterable;

    protected $fillable = ['name'];

    public $timestamps = false;

    public function agent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function modelFilter()
    {
        return $this->provideFilter(ClientFilter::class);
    }

    public function managers()
    {
        return $this->belongsToMany(User::class);
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
