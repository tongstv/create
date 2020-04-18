<?php
namespace {{Name}}\{{Package}};

use Illuminate\Database\Eloquent\Model;

/**
 * Model of the table tasks.
 */
class {{Package}}Model extends Model
{
    protected $table = '{{package}}';

    protected $fillable = [
        'name',
    ];
}
