<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Kritik extends Model
{

    use Sortable;

    protected $table = 'kritik';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama_siswa', 'email_siswa', 'kritik'];

    public $sortable = ['id'];
}
