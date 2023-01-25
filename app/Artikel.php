<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Artikel extends Model
{

    use Sortable;

    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'judul_artikel', 'caption_artikel', 'uraian_artikel', 'gambar_artikel'];

    public $sortable = ['id'];
}
