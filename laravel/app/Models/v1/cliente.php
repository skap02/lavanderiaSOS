<?php

namespace App\Models\v1;


use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class clientes extends Model
{
    use HasUUID;

    protected $table = 'clientes';
    protected $primaryKey = "id";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';
}
