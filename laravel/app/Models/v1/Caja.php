<?php

namespace App\Models\v1;


use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Caja extends Model
{
    use HasUUID;

    protected $table = 'caja';
    protected $primaryKey = "id";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';

}
