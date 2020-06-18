<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $username
 * @property string $descripcion
 * @property string $password
 * @property string $email
 * @property string $tokenRecover
 * @property bool $activo
 * @property Carbon $ultimaConexion
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Usuario extends Model
{
	use SoftDeletes;
	protected $table = 'usuario';

	protected $casts = [
		'activo' => 'bool'
	];

	protected $dates = [
		'ultimaConexion'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'descripcion',
		'password',
		'email',
		'tokenRecover',
		'activo',
		'ultimaConexion'
	];
}
