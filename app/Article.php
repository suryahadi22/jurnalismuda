<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model

{
    protected $table = 'article';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul', 'kategori_id', 'tag_id', 'isi'
    ];
    public $timestamp = true;

   public function user()
   {
       return $this->belongsTo('App\User', 'penulis_id', 'id');
   }
}
