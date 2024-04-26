<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $ID_ROLE
 * @property string $NOM_ROLE
 * @property string $DESCRIPTION
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'role';
	protected $primaryKey = 'ID_ROLE';

	protected $fillable = [
		'NOM_ROLE',
		'DESCRIPTION'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'ID_ROLE');
	}
}
