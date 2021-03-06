<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

abstract class BaseController extends Controller
{
    protected $products = [];
    protected $products_raw = [];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (!Cache::has('products')) {

            $this->products_raw = collect([
                [
                    'id' => '1',
                    'name' => 'Mouse 1',
                    'price' => 100,
                    'image' => $this->image_to_base64('https://cdn1.medicalnewstoday.com/content/images/articles/277/277169/mouse.jpg'),
                    'quantity' => 1,
                    'tax' => 25,
                    'weight' => 200,
                    'options' => json_decode('[{"name":"color", "type":"dropdown", "label":"Chose color", "required":false, "selected":null, "items":[{"name":"pink", "price":20, "weight":50},{"name":"yellow", "price":-10, "weight":50}]}, {"name":"size", "type":"dropdown", "label":"Chose size", "required":false, "selected":null, "items":[{"name":"Small", "price":20, "weight":50},{"name":"Large", "price":-10, "weight":50}]}]')
                ],

                [
                    'id' => '2',
                    'name' => 'Mouse 2',
                    'price' => 100,
                    'image' => $this->image_to_base64('http://www.pommesbuddha.com/wp-content/uploads/2017/12/0099-The-Mouse.jpg'),
                    'quantity' => 1,
                    'tax' => 25,
                    'weight' => 200,
                    'options' => []
                ]
            ]);

            Cache::forever('products', $this->products_raw);
        }

        $this->products = Cache::get('products');
    }

    function image_to_base64($path_to_image)
    {
        $type = pathinfo($path_to_image, PATHINFO_EXTENSION);
        $image = file_get_contents($path_to_image);
        return 'data:image/' . $type . ';base64,' . base64_encode($image);
    }
}
