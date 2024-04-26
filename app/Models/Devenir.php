<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Devenir
 * 
 * @property int $ID_RESERVATION
 * @property int $ID_OCCUPATION
 * 
 * @property Reservation $reservation
 * @property Occupation $occupation
 *
 * @package App\Models
 */
class Devenir extends Model
{
	protected $table = 'devenir';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_RESERVATION' => 'int',
		'ID_OCCUPATION' => 'int'
	];

	public function reservation()
	{
		return $this->belongsTo(Reservation::class, 'ID_RESERVATION');
	}

	public function occupation()
	{
		return $this->belongsTo(Occupation::class, 'ID_OCCUPATION');
	}
}
