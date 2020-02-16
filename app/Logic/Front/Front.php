<?php


namespace App\Logic\Front;


use App\Models\YoshopGoods;

class Front
{
    /**
     * @param int $limit
     * @param $goodsFilter
     * @return YoshopGoods[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getGoodsInfo($limit = 0, $goodsFilter)
    {
        $shopOrm = YoshopGoods::with('getGoodsSpec')->with(['giftGoodsImage' => function ($query) {
            $query->with('giftGoodsImage');
        }]);

        if($limit > 0 ){
            $shopOrm = $shopOrm->limit($limit);
        }

        foreach ($goodsFilter as $goodsKey =>$goodsVal){
            $shopOrm = $shopOrm->where($goodsKey,$goodsVal);
        }

        return $shopOrm->orderBy('goods_id','desc')->get();
    }
}