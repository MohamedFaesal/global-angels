<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ShipmentFitResource;
use App\Http\Resources\StateResource;
use App\Models\Country;
use App\Models\Product;
use App\Models\ShipmentFit;
use App\Utils\ProductTypeUtil;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers\Api
 */
class ProductController extends Controller
{
    public function onlineStore(Request $request)
    {
        return $this->getProducts(ProductTypeUtil::ONLINE_STORE, $request);
    }

    public function preOrderStore(Request $request)
    {
        return $this->getProducts(ProductTypeUtil::PRE_ORDERS, $request);
    }

    public function getProducts($type, $request) {
        $products = Product::where('type', $type)->paginate(10);
        return $this->success(
            ProductResource::collection($products),
            'products fetched successfully',
            [
                'nextPageUrl' => $products->nextPageUrl(),
                'previousPageUrl' => $products->previousPageUrl()
            ]
        );

    }
    public function profile($id)
    {
        $product = Product::find($id);
        if (!$product) {
            throw new \Exception("product not found", 404);
        }
        return $this->success(
            new ProductResource($product),
            'products fetched successfully'
        );
    }

    public function shipmentFits()
    {
        return $this->success(ShipmentFitResource::collection(ShipmentFit::all()));
    }
}
