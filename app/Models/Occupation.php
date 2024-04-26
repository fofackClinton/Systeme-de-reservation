<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Occupation
 * 
 * @property int $ID_OCCUPATION
 * @property int $ID_CHAMBRE
 * @property int $ID
 * @property int $ID_type
 * @property int $Durer
 * @property int $montat
 * @property int $montatpayer
 * @property int $restepayer
 * @property string $Statut
 * @property Carbon $DATE_DEBUT
 * @property Carbon $DATE_FIN
 * @property Carbon $HEURE_DEBUT
 * @property Carbon $HEURE_FIN
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Chambre $chambre
 * @property User $user
 * @property Typeoccupation $typeoccupation
 * @property Collection|Devenir[] $devenirs
 *
 * @package App\Models
 */
class Occupation extends Model
{
	protected $table = 'occupation';
	protected $primaryKey = 'ID_OCCUPATION';

	protected $casts = [
		'ID_CHAMBRE' => 'int',
		'ID' => 'int',
		'ID_type' => 'int',
		'Durer' => 'int',
		'montat' => 'int',
		'montatpayer' => 'int',
		'restepayer' => 'int',
		'DATE_DEBUT' => 'datetime',
		'DATE_FIN' => 'datetime',
		'HEURE_DEBUT' => 'datetime',
		'HEURE_FIN' => 'datetime'
	];

	protected $fillable = [
		'ID_CHAMBRE',
		'ID',
		'ID_type',
		'Durer',
		'montat',
		'montatpayer',
		'restepayer',
		'Statut',
		'DATE_DEBUT',
		'DATE_FIN',
		'HEURE_DEBUT',
		'HEURE_FIN'
	];

	public function chambre()
	{
		return $this->belongsTo(Chambre::class, 'ID_CHAMBRE');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'ID');
	}

	public function typeoccupation()
	{
		return $this->belongsTo(Typeoccupation::class, 'ID_type');
	}

	public function devenirs()
	{
		return $this->hasMany(Devenir::class, 'ID_OCCUPATION');
	}
}
