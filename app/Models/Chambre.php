<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chambre
 * 
 * @property int $ID_CHAMBRE
 * @property string|null $NOM_CHAMBRE
 * @property string $TYPE_CHAMBRE
 * @property string $IMAGE
 * @property string $DESCRIPTION
 * @property int $PRIX
 * @property int $NOMBRE_LITS
 * @property bool $TELEVISION
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Occupation[] $occupations
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class Chambre extends Model
{
	protected $table = 'chambre';
	protected $primaryKey = 'ID_CHAMBRE';

	protected $casts = [
		'PRIX' => 'int',
		'NOMBRE_LITS' => 'int',
		'TELEVISION' => 'bool'
	];

	protected $fillable = [
		'NOM_CHAMBRE',
		'TYPE_CHAMBRE',
		'IMAGE',
		'DESCRIPTION',
		'PRIX',
		'NOMBRE_LITS',
		'TELEVISION'
	];

	public function occupations()
	{
		return $this->hasMany(Occupation::class, 'ID_CHAMBRE');
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class, 'ID_CHAMBRE');
	}
}
