<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtos extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	
    public function mostrarComentarios(){
    	return $this->hasMany('App\Comentario','produtos_id','id');
    }
}
