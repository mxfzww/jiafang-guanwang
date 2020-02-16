<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YoshopGoods extends Model
{
    protected $connection = 'mysql_shop';
    protected $table = "yoshop_goods";

    public function getGoodsSpec()
    {
        return $this->hasOne(YoshopGoodsSpec::class, 'goods_id', 'goods_id');
    }

    public function giftGoodsImage()
    {
        return $this->hasOne(YoshopGoodsImage::class, 'goods_id', 'goods_id');
    }
}
