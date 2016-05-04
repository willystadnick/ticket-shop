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
    public static $tipos = ['', 'show', 'balada', 'teatro', 'esporte'];

    public function scopeNome($query, $nome)
    {
        if (empty($nome)) {
            return $query;
        }

        return $query->where('nome', 'like', '%' . str_replace(' ', '%', $nome) . '%');
    }

    public function scopeRealizacao($query, $realizacao)
    {
        if (empty($realizacao)) {
            return $query;
        }

        return $query->where('realizacao', $realizacao);
    }

    public function scopeOrganizador($query, $organizador)
    {
        if (empty($organizador)) {
            return $query;
        }

        return $query->where('organizador', 'like', '%' . str_replace(' ', '%', $organizador) . '%');
    }

    public function scopeDescricao($query, $descricao)
    {
        if (empty($descricao)) {
            return $query;
        }

        return $query->where('descricao', 'like', '%' . str_replace(' ', '%', $descricao) . '%');
    }

    public function scopeLotacao($query, $lotacao)
    {
        if (empty($lotacao)) {
            return $query;
        }

        return $query->where('lotacao', $lotacao);
    }

    public function scopeTipo($query, $tipo)
    {
        if (empty($tipo)) {
            return $query;
        }

        return $query->where('tipo', $tipo);
    }
}
