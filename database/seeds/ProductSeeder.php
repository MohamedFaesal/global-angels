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
        ];
        foreach ($data as $datum) {
            \App\Models\Product::create($datum);
        }
    }
}
