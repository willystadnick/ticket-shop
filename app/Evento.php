<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'eventos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'realizacao', 'organizador', 'descricao', 'lotacao', 'tipo'];

    /**
     * Tipos possíveis.
     *
     * @var array
     */
    public static $tipos = ['show', 'balada', 'teatro', 'esporte'];
}
