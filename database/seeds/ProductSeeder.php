<?php

use Illuminate\Database\Seeder;
use \App\Utils\ProductTypeUtil;
use \App\Utils\ProductSourceUtil;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Acer Aspire 5 Slim Laptop',
                'category_id' => 2,
                'description' => 'AMD Ryzen 3 3200U Dual Core Processor (Up to 3.5GHz); 4GB DDR4 Memory; 128GB PCIe NVMe SSD
                15.6 inches full HD (1920 x 1080) widescreen LED backlit IPS display; AMD Radeon Vega 3 Mobile Graphics
                1 USB 3.1 Gen 1 port, 2 USB 2.0 ports & 1 HDMI port with HDCP support
                802.11ac Wi-Fi; Backlit Keyboard; Up to 7.5 hours battery life
                Windows 10 in S mode. Maximum power supply wattage: 65 Watts',
                'type' => ProductTypeUtil::ONLINE_STORE,
                'affiliate_link' => 'https://www.amazon.com/Acer-Display-Graphics-Keyboard-A515-43-R19L/dp/B07RF1XD36',
                'source' => ProductSourceUtil::AMAZON,
                'source_id' => 'B07RF1XD36',
                'price' => 364.99,
                'weight' => '3.97',
                'weight_type' => 'lbs',
                'main_image' => 'https://images-na.ssl-images-amazon.com/images/I/71vvXGmdKWL._AC_SL1500_.jpg'
            ],
            [
                'name' => 'HP 24mh FHD Monitor',
                'category_id' => 2,
                'description' => 'OUTSTANDING VISUALS – This FHD display with IPS technology gives you brilliant visuals and unforgettable quality; with a maximum resolution of 1920 x 1080 @ 75 Hz, you’ll experience the image accuracy and wide-viewing spectrums of premium tablets and mobile devices
                MORE SCREEN, LESS SPACE – Enjoy more desk space than you thought possible with an attractive and ultra-slim design
                PANORAMIC VIEWING – Vibrant detail from practically any position with consistent color and image clarity maintained across an ultra-wide 178° horizontal and vertical viewing angles
                MICRO-EDGE DISPLAY – With virtually no bezel encircling the display on three sides, an ultra-wide viewing experience provides for seamless multi-monitor setups
                EASY CONNECTIVITY – Get the picture quality you’ve been looking for without the additional dongles; easily connect to your PC, gaming console, and peripherals for big-screen entertainment with a broad range of ports, including HDMI, DisplayPort, and VGA ports
                BUILT-IN SPEAKERS – Experience incredible sound and more immersive entertainment with two built-in 2W speakers
                LOW BLUE LIGHT – Put less strain on your eyes as a Low Blue Light mode shifts colors to a warmer spectrum and makes whites more natural',
                'type' => ProductTypeUtil::ONLINE_STORE,
                'affiliate_link' => 'https://www.amazon.com/HP-24mh-FHD-Monitor-Built/dp/B08BF4CZSV',
                'source' => ProductSourceUtil::AMAZON,
                'source_id' => 'B08BF4CZSV',
                'price' => 164.99,
                'weight' => '9.94',
                'weight_type' => 'pounds',
                'main_image' => 'https://images-na.ssl-images-amazon.com/images/I/91fAU6mxFsL._AC_SL1500_.jpg'
            ],
            [
                'name' => 'Apple iPhone 11 Pro, 64GB, Space Gray - Fully Unlocked (Renewed)',
                'category_id' => 4,
                'description' => 'Fully unlocked and compatible with any carrier of choice (e.g. AT&T, T-Mobile, Sprint, Verizon, US-Cellular, Cricket, Metro, etc.).
                The device does not come with headphones or a SIM card. It does include a charger and charging cable that may be generic, in which case it will be UL or Mfi (Made for iPhone) Certified.
                Inspected and guaranteed to have minimal cosmetic damage, which is not noticeable when the device is held at arms length.
                Successfully passed a full diagnostic test which ensures like-new functionality and removal of any prior-user personal information.
                Tested for battery health and guaranteed to have a minimum battery capacity of 80%.',
                'type' => ProductTypeUtil::ONLINE_STORE,
                'affiliate_link' => 'https://www.amazon.com/Apple-iPhone-64GB-Space-Gray/dp/B07ZPKZSSC',
                'source' => ProductSourceUtil::AMAZON,
                'source_id' => 'B07ZPKZSSC',
                'price' => 669.99,
                'weight' => '1.01',
                'weight_type' => 'pounds',
                'main_image' => 'https://images-na.ssl-images-amazon.com/images/I/41wDuEW9iZL._AC_.jpg'
            ],
            [
                'name' => 'Fitbit Versa 2 40mm Smartwatch with Amazon Alexa & Heart Rate Tracking - Black',
                'category_id' => 1,
                'description' => 'Reach your physical fitness goals in style with the Fitbit Versa 2 smartwatch. It automatically tracks your calories burned, steps taken, heart rate, sleeping patterns, and more. It helps keep you in the loop by wirelessly syncing with your smartphone for at-a-glance notifications from texts, emails, social media, and your calendar.',
                'type' => ProductTypeUtil::ONLINE_STORE,
                'affiliate_link' => 'https://www.bestbuy.ca/en-ca/product/fitbit-versa-2-40mm-smartwatch-with-amazon-alexa-heart-rate-tracking-black/13864604',
                'source' => ProductSourceUtil::BEST_BUY,
                'source_id' => '13864604',
                'price' => 199.99,
                'weight' => '40',
                'weight_type' => 'gram',
                'main_image' => 'https://multimedia.bbycastatic.ca/multimedia/products/1500x1500/138/13864/13864604.jpg'
            ],
            [
                'name' => 'Apple MacBook Pro w/ Touch Bar (2019 Model) 13.3" - Space Grey (Intel Core i5 1.4GHz / 128GB SSD / 8GB RAM) - Eng - Open Box',
                'category_id' => 2,
                'description' => 'The 13-inch MacBook Pro packs powerful processors, a super-fast SSD, all-day battery life and the best Mac notebook display ever into a portable 3-pound design. It adds the latest quad-core processors for faster performance, Touch Bar and Touch ID, True Tone to the brilliant Retina display, the Apple T2 Security Chip and immersive stereo speakers.',
                'type' => ProductTypeUtil::ONLINE_STORE,
                'affiliate_link' => 'https://www.bestbuy.ca/en-ca/product/apple-macbook-pro-w-touch-bar-2019-model-13-3-space-grey-intel-core-i5-1-4ghz-128gb-ssd-8gb-ram-eng-open-box/14539148?icmp=Recos_3across_tp_sllng_prdcts&referrer=PLP_Reco',
                'source' => ProductSourceUtil::BEST_BUY,
                'source_id' => '14539148',
                'price' => 1299.99,
                'weight' => '6.6',
                'weight_type' => 'lbs',
                'main_image' => 'https://multimedia.bbycastatic.ca/multimedia/products/1500x1500/145/14539/14539148.jpg'
            ],
            [
                'name' => 'Viking Windigo Pants (920P-L) - Large - Black',
                'category_id' => 6,
                'description' => 'Viking Windigo Pants feature two zippered pockets and one back storage pocket. When the temperature starts to rise, easily fold the pants into the front left pocket for quick storage. Fully lined for comfort and ventilation, Windigo Pants are perfect for any outdoors activity.',
                'type' => ProductTypeUtil::ONLINE_STORE,
                'affiliate_link' => 'https://www.bestbuy.ca/en-ca/product/viking-viking-windigo-pants-920p-l-large-black-920p-l/10184417',
                'source' => ProductSourceUtil::BEST_BUY,
                'source_id' => '10184417',
                'price' => 64.99,
                'weight' => '',
                'weight_type' => '',
                'main_image' => 'https://multimedia.bbycastatic.ca/multimedia/products/500x500/101/10184/10184417.jpg'
            ],
        ];
        for ($i = 1; $i <= 40; $i++) {
            foreach ($data as $datum) {
                if ($i > 10) {
                    $datum['type'] = ProductTypeUtil::PRE_ORDERS;
                }
                $product = \App\Models\Product::create($datum);
                \Illuminate\Support\Facades\DB::table('product_fits')->insert([
                    [
                        'product_id' => $product->id,
                        'shipment_fit_id' => 1,
                    ],
                    [
                        'product_id' => $product->id,
                        'shipment_fit_id' => random_int(2, 3),
                    ],
                ]);
            }
        }
    }
}
