<?php

return [

  'config' => [

    /*
    |--------------------------------------------------------------------------
    | OAuth
    |--------------------------------------------------------------------------
    */
   
    'oauth' => [

      /*
      |--------------------------------------------------------------------------
      | Callback URL
      |--------------------------------------------------------------------------
      |
      | Provide a callback URL.
      |
      */
   
      'callback' => env('XERO_OAUTH_CALLBACK', 'oob'),

      /*
      |--------------------------------------------------------------------------
      | Consumer Key and Secret
      |--------------------------------------------------------------------------
      |
      | Register your application via the Xero developer website and add the 
      | consumer key and secret provided.
      |
      */

      'consumer_key' => env('XERO_OAUTH_CONSUMER_KEY', ''),
      'consumer_secret' => env('XERO_OAUTH_SECRET_KEY', ''),

      /*
      |--------------------------------------------------------------------------
      | RSA Keys
      |--------------------------------------------------------------------------
      |
      | Generate private and public rsa keys using the following guide from the
      | Xero website and upload to your server.
      |
      | https://developer.xero.com/documentation/api-guides/create-publicprivate-key
      |
      | Add the absolute path of each file on your server prefixed by file://
      |
      | For UNIX based filesystems incude the first '/' from the absolute file
      | path.
      |
      | file:///absolute/path/to/file.
      |
      */

      'rsa_private_key' => env('XERO_OAUTH_RSA_PRIVATE_KEY', ''),
      'rsa_public_key' => env('XERO_OAUTH_RSA_PUBLIC_KEY', ''),
    ],

    /*
    |--------------------------------------------------------------------------
    | Webhook
    |--------------------------------------------------------------------------
    |
    | If using webhooks add the webhook key provided by Xero.
    |
    */

    'webhook' => [
      'signing_key' => env('XERO_WEBHOOK_SIGNING_KEY', ''),
    ]
  ],
];
