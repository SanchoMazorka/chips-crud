<?php

namespace App\Models;

//use App\Models\Carrier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chip extends Model
{
    use HasFactory;
		protected $fillable = [
			'client',
			'nim',
			'sim',
			'carrier_id',
			'comment',
			'user_id',
	];

	public function carrier(){
		return $this->belongsTo(Carrier::class);
		#return $this->hasOne('App\Models\Carrier');
	}
}
