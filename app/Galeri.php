<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Galeri extends Model
{

    use Sortable;

    protected $table = 'galeri';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'foto_galeri'];

    public $sortable = ['id'];
}
