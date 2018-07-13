<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
		'name', 'address', 'cellPhone', 'phone', 'email'
	];


	public function scopeType($query, $type, $valor) 
    {
		
		if ($type == 'address')
        {
            $query->where('address', 'like', '%' . $valor . '%')->orderBy('id', 'DESC');
        } else if ($type == 'client') 
        {
			//$query->where('id', $valor)->orderBy('id', 'ASC');
    		$query->where('name', 'like', '%' . $valor . '%')->orderBy('id', 'DESC');
			//$query->client()->where('name', 'like', '%' . $valor . '%')->orderBy('id', 'ASC');

        } else
        {
            $query;
        }
    }
}
