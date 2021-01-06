<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Resources\CountryResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ShipmentFitResource;
use App\Http\Resources\StateResource;
use App\Models\Country;
use App\Models\Product;
use App\Models\ShipmentFit;
use App\Utils\ProductSourceUtil;
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

    public function store(AddProductRequest $request) {
        $data = $request->validated();
        $source = baseDomainName($data['link']);
        $sourceId = false;
        if ($source == ProductSourceUtil::AMAZON) {
            $source = ProductSourceUtil::AMAZON;
            $sourceId = getAmazonAsin($data['link']);
        } else if ($source == 'bestbuy') {
            $source = ProductSourceUtil::BEST_BUY;
        } else if ($source == ProductSourceUtil::NOON) {
            $source = ProductSourceUtil::NOON;
        } else if ($source == ProductSourceUtil::APPLE) {
            $source = ProductSourceUtil::APPLE;
        } else {
            throw new \Exception('Not a supported link, should be from ' . implode(',', ProductSourceUtil::getTypes()), 400);
        }
        if (!$sourceId) {
            throw new \Exception('Not a supported link, should be from ' . implode(',', ProductSourceUtil::getTypes()), 400);
        }
        foreach ($data['images'] as $image) {
            if (!is_base64($image)) {
                throw new \Exception('invalid image sent', 400);
            }
        }
        $product = [
            'name' => $data['name'],
            'category_id' => $data['category_id'],
            'quantity' => $data['quantity'],
            'country_from' => $data['country_from'],
            'country_to' => $data['country_to'],
            'weight' => $data['weight'],
            'weight_unit' => $data['weight_unit'],
            'price' => $data['price'],
            'currency' => $data['currency'],
            'delivery_date' => $data['delivery_date'],
            'order_before' => $data['order_before'],
            'description' => $data['description'],
            'source' => $source,
            'source_id' => $sourceId,
            'affiliate_link' => $data['link'],
            'type' => ProductTypeUtil::PRE_ORDERS,
        ];
        $product = Product::create($product);

        dd($product);
    }
}
