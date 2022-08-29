<?php

namespace App\Models\v1;


use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
//use App\Models\v1\Categoria;

class Cliente extends Model
{
    use HasUUID;

    protected $table = 'clientes';
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
