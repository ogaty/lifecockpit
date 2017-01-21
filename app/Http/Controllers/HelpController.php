<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\McCategories;

class HelpController extends Controller
{
    //
    public function index($category_id = 1) {
        switch ($category_id) {
        case 1:
            return view('mchelp/index', ['astro' => $this->astro(), 'category_id' => $category_id]);
            break;
        case 2:
            return view('mchelp/install', ['astro' => $this->astro(), 'category_id' => $category_id]);
            break;
        }
        return view('mchelp/index', ['astro' => $this->astro(), 'category_id' => $category_id]);
    }

    public function page($current) {
        return response()->json(['mainMenu' => '西洋占星術士用ホロスコープ作成ソフト「microcosm」',
                                 'subMenu' => 'HELP']);
    }

    public function sidenav($current) {
        $categories = McCategories::all()->toArray();
        foreach ($categories as $value) {
            $categories2 = $value;
            $categories2['onclick'] = 'pageChange(' . $value['id'] . ')';
            $categories2['link'] = '#' . $value['category_name'];
            if ($value['id'] == $current) {
                $categories2['current'] = 1;
            } else {
                $categories2['current'] = 0;
            }
        }
        return response()->json(['categoryList' => $categories2]);
    }

    private function astro() {
        if ($_SERVER['HTTP_HOST'] == 'microcosm.astrominit.com') {
            return true;
        }
        return false;
    }
}
