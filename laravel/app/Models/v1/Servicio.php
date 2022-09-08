<?php

namespace App\Models\v1;


use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;


class Servicio extends Model
{
    use HasUUID;

    protected $table = 'Servicios';
    protected $primaryKey = "id";
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';
/*
    public function categoria()
    {
        return $this->hasOne(Categoria::class,"categorias_id");
    }*/
}
