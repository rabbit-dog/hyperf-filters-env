<?php

namespace Filter\TestClass;


use Hyperf\Database\Model\Model;
use Rabbit\Filter\Filterable;

class User extends Model
{
    use Filterable;

    protected $fillable = ['name'];

    public $timestamps = false;

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function modelFilter()
    {
        return $this->provideFilter(UserFilter::class);
    }
}
