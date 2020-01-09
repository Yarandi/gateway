<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GateWayConfigTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //php artisan db:seed --class=GateWayConfigTableSeeder
    public function run()
    {
        DB::table('gateway_config')->insert([
            'port' => 'zarinpal',
            'params' => json_encode([
                'merchant-id'  => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
                'type'         => 'zarin-gate',
                'callback-url' => '/',
                'server'       => 'germany',
                'email'        => 'email@gmail.com',
                'mobile'       => '09xxxxxxxxx',
                'description'  => 'description',
            ]),
        ]);

        DB::table('gateway_config')->insert([
            'port' => 'mellat',
            'params' => json_encode([
                'username'     => '',
                'password'     => '',
                'terminalId'   => 0000000,
                'callback-url' => '/'
            ]),
        ]);

        DB::table('gateway_config')->insert([
            'port' => 'saman',
            'params' => json_encode([
                'merchant'     => '',
                'password'     => '',
                'callback-url'   => '/',
            ]),
        ]);

        DB::table('gateway_config')->insert([
            'port' => 'payir',
            'params' => json_encode([
                'api'          => 'xxxxxxxxxxxxxxxxxxxx',
                'callback-url' => '/'
            ]),
        ]);

        DB::table('gateway_config')->insert([
            'port' => 'irankish',
            'params' => json_encode([
                'merchantId' => 'xxxxxxxxxxxxxxxxxxxx',
                'sha1key' => 'xxxxxxxxxxxxxxxxxxxx',
                'callback-url' => '/'
            ]),
        ]);

        DB::table('gateway_config')->insert([
            'port' => 'sadad',
            'params' => json_encode([
                'merchant'      => '',
                'transactionKey'=> '',
                'terminalId'    => 000000000,
                'callback-url'  => '/'
            ]),
        ]);


        DB::table('gateway_config')->insert([
            'port' => 'parsian',
            'params' => json_encode([
                'pin'          => 'xxxxxxxxxxxxxxxxxxxx',
                'callback-url' => '/'
            ]),
        ]);

        DB::table('gateway_config')->insert([
            'port' => 'pasargad',
            'params' => json_encode([
                'terminalId'    => 000000,
                'merchantId'    => 000000,
                'certificate-path'    => storage_path('gateway/pasargad/certificate.xml'),
                'callback-url' => '/gateway/callback/pasargad'
            ]),
        ]);

        DB::table('gateway_config')->insert([
            'port' => 'asanpardakht',
            'params' => json_encode([
                'merchantId'     => '',
                'merchantConfigId'     => '',
                'username' => '',
                'password' => '',
                'key' => '',
                'iv' => '',
                'callback-url'   => '/',
            ]),
        ]);

        DB::table('gateway_config')->insert([
            'port' => 'paypal',
            'params' => json_encode([
                // Default product name that appear on paypal payment items
                'default_product_name' => 'My Product',
                'default_shipment_price' => 0,
                // set your paypal credential
                'client_id' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'secret'    => 'xxxxxxxxxx_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                'settings'  => [
                    'mode'                   => 'sandbox', //'sandbox' or 'live'
                    'http.ConnectionTimeOut' => 30,
                    'log.LogEnabled'         => true,
                    'log.FileName'           => storage_path() . '/logs/paypal.log',

                    'call_back_url'          => '/gateway/callback/paypal',
                    'log.LogLevel'           => 'FINE'
                ],
            ])
        ]);
    }
}
