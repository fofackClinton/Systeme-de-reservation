<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Typeoccupation
 * 
 * @property int $ID_type
 * @property string $libele
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Occupation[] $occupations
 *
 * @package App\Models
 */
class Typeoccupation extends Model
{
	protected $table = 'typeoccupation';
	protected $primaryKey = 'ID_type';

	protected $fillable = [
		'libele'
	];

	public function occupations()
	{
		return $this->hasMany(Occupation::class, 'ID_type');
	}
}
