<?php

namespace App\Http\Controllers\Front;

use App\Logic\Front\Front;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

/**
 * Class Controller
 * @package App\Http\Controllers\Front
 */
class Controller extends BaseController
{
    /**
     * @var Front
     */
    protected $logic;

    public function __construct()
    {
        $this->logic = new Front();
    }

    /**
     * Show the application dashboard.
     * @param Request $rqs
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $rqs)
    {
        $menu = collect($this->menu);

        $action = $rqs->get('a');

        $indexBool = $menu->pluck('index')->contains($action);

        $menuSet = $menu->where('index',$indexBool ? $action : "index")->first();

        $data = $this->{$menuSet['med']}($rqs);

        return view("front.{$menuSet['index']}", ['menu' => $menu, 'list' => $data]);
    }

    /**
     * @return Front
     */
    public function getLogic(): Front
    {
        return $this->logic;
    }
}
