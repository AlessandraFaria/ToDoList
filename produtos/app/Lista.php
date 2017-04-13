<?php namespace produtos;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model {

	protected $table = 'lista';
	public $timestamps = false;
	protected $fillable = array('nome', 
            'estado', 'descricao');

}