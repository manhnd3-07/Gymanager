<?php

namespace App\Models;
use App\Models\Hymnal;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'id';
    protected $guarded =[];
    public function hymnal(){
        return $this->hasOne(Hymnal::class, 'id_catap', 'id');
    }
    public function service(){
    	return $this->belongsTo(Service::class);
    }
}
