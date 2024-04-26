<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * 
 * @property int $ID_IMAGE
 * @property string $ADRESS_IMAGE
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Chambre[] $chambres
 *
 * @package App\Models
 */
class Image extends Model
{
	protected $table = 'images';
	protected $primaryKey = 'ID_IMAGE';

	protected $fillable = [
		'ADRESS_IMAGE'
	];

	public function chambres()
	{
		return $this->hasMany(Chambre::class, 'ID_IMAGE');
	}
}
