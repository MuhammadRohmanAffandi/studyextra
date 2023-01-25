<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Ebook extends Model
{

    use Sortable;

    protected $table = 'ebook';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_ebook', 'file_ebook'];

    public $sortable = ['id'];
}
