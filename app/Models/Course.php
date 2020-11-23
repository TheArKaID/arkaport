<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property boolean $type
 * @property boolean $level
 * @property string $title
 * @property string $detail
 * @property string $created_at
 * @property string $updated_at
 */
class Course extends Model
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
    protected $fillable = ['type', 'level', 'title', 'detail', 'created_at', 'updated_at'];

}
