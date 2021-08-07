<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tienda extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombre',
        'user_id',
        'cif',
        'location',
        'horario',
        'estado',
        'imagen',
        'created_at',
        'updated_at'

    ];

    public function pedidos(){
        return $this->hasMany(Pedido::class, 'tienda_id', 'id')
            ->orderBy('created_at', 'DESC')->with('user');
    }

}
