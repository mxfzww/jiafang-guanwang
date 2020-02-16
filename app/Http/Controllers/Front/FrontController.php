<?php

namespace App\Http\Controllers\Front;

use App\Models\YoshopGoods;
use App\Models\YoshopGoodsImage;
use App\Models\YoshopGoodsSpec;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $menu = [
        [
            'title'=>'首页',
            'icon' =>'icon-shouye',
            'menus' =>true,
            'index' =>'index',
            'med' =>"getHome",
        ],
        [
            'title'=>'关于我们',
            'icon' =>'icon-about',
            'menus' =>true,
            'index' =>'about',
            'med' =>"getNull",
        ],
        [
            'title'=>'联系我们',
            'icon' =>'icon-contact',
            'menus' =>true,
            'index' =>'contact',
            'med' =>"getNull",
        ],
        [
            'title'=>'新闻动态',
            'icon' =>'icon-dongtai',
            'menus' =>true,
            'index' =>'news',
            'med' =>"getNull",
        ],
        [
            'title'=>'产品中心',
            'icon' =>'icon-procenter',
            'menus' =>true,
            'index' =>'products',
            'med' =>"getGoods",
        ],
        [
            'title'=>'产品详情',
            'icon' =>'icon-shouye',
            'menus' =>false,
            'index' =>'prodel',
            'med' =>"getOneGoods",
        ],
        [
            'title'=>'新闻动态-详情',
            'icon' =>'icon-shouye',
            'menus' =>false,
            'index' =>'newdel',
            'med' =>"getNull",
        ],
    ];

    public function getHome($req)
    {
        return $this->getLogic()->getGoodsInfo(4);
    }

    public function getGoods($req)
    {
        return $this->getLogic()->getGoodsInfo();
    }

    public function getOneGoods($req)
    {
        $goodsFilter = [
            'goods_id'=> (int)$req->get('goods_id'),
        ];

        $goodsInfo = $this->getLogic()->getGoodsInfo(0,$goodsFilter);
        return $goodsInfo[0];
    }

    public function getNull()
    {
        return;
    }
}
