<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $ID_RESERVATION
 * @property int $ID_CHAMBRE
 * @property int $ID
 * @property int $prix
 * @property string $Statut
 * @property int $Durer
 * @property Carbon $DATE_DEBUT
 * @property Carbon $DATE_FIN
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Chambre $chambre
 * @property User $user
 * @property Collection|Devenir[] $devenirs
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservation';
	protected $primaryKey = 'ID_RESERVATION';

	protected $casts = [
		'ID_CHAMBRE' => 'int',
		'ID' => 'int',
		'prix' => 'int',
		'Durer' => 'int',
		'DATE_DEBUT' => 'datetime',
		'DATE_FIN' => 'datetime'
	];

	protected $fillable = [
		'ID_CHAMBRE',
		'ID',
		'prix',
		'Statut',
		'Durer',
		'DATE_DEBUT',
		'DATE_FIN'
	];

	public function chambre()
	{
		return $this->belongsTo(Chambre::class, 'ID_CHAMBRE');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'ID');
	}

	public function devenirs()
	{
		return $this->hasMany(Devenir::class, 'ID_RESERVATION');
	}
}
