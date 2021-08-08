<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pedido extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'pedidos';
    protected $fillable = [
        'user_id',
        'tienda_id',
        'pedido',
        'precio',
        'fecha_recogida',
        'comentarios',
        'estado',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
