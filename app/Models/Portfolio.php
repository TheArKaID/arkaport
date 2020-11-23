<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property boolean $type
 * @property string $title
 * @property string $github
 * @property string $url
 * @property string $detail
 * @property string $images
 * @property string $created_at
 * @property string $updated_at
 */
class Portfolio extends Model
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
    protected $fillable = ['type', 'title', 'github', 'url', 'detail', 'images', 'created_at', 'updated_at'];

}
