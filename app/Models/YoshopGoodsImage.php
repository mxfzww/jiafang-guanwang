<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YoshopGoodsImage extends Model
{
    protected $connection = 'mysql_shop';

    protected $table = "yoshop_goods_image";

    public function giftGoodsImage()
    {
        return $this->hasMany(YoshopUploadFile::class, 'file_id', 'image_id');
    }
}
