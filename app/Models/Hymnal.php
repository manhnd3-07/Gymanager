<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hymnal extends Model
{
    protected $table = 'hymnals';
    protected $fillable = [
     'code' , 'name' , 'start_hour' ,'end_hour' ,'describe'
    ];
    public function package(){
        return $this->belongsTo(Package::class, 'id_catap', 'id');
    }
}
