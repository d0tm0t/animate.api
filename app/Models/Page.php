<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
 protected $table = 'Pages';

 protected $fillable = [
  'url',
  'enabled'
 ];


 protected $dates = [
  'created_at',
  'updated_at',

 ];

 protected $appends = ['resource_url'];

 public function getResourceUrlAttribute()
 {
  return url('/admin/pages/' . $this->getKey());
 }
}
