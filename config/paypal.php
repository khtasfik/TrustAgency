<?php
return [
    'client_id' => env(
        'PAYPAL_CLIENT_ID',
        'AVmoCja-Guuaht2SF53W0fBjgpQLVMt2-oT9JxRLmtfx9ClVrI7Wi4ew1DwUuT1MAZwVlXGw-xP5egTP'
    ),
    'secret' => env(
        'PAYPAL_SECRET',
        'EKg1y6Z8h9j07We5hR0XlLpBy8h3UqAAu9tBcM8KKz78mMSHEfQQTq7R0t41LOlsZEEoY2R78F-LZOCI'
    ),
    'SETTING' => array(
        'mode' => env('PAYPAL_MODE', 'sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),

];
