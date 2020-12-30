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

/**
 * Class ProductController
 * @package App\Http\Controllers\Api
 */
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('type', ProductTypeUtil::ONLINE_STORE)->paginate(10);
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
