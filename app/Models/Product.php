<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded = ['id','created_at','updated_at'];

    //Relación uno a muchos
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    //Relación uno a muchos inversa
    public function brand()
    {
        $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        $this->belongsTo(Subcategory::class);
    }

    //Relación muchos a muchos
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    //Relación uno a muchos polimorfica

    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }

}
