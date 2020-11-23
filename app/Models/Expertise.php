<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property boolean $type
 * @property string $name
 * @property string $detail
 * @property string $created_at
 * @property string $updated_at
 */
class Expertise extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['type', 'name', 'detail', 'created_at', 'updated_at'];

}
