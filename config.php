<?php
 require 'paypal/autoload.php';

 $apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AZLeOdFl-Kx89QDQzv_NYycoq4DWRvZWEtWS0WaZFKtgFjpmxT6Swq3ETFYAayXSC-9E1BLoX8BAvnOJ',//cliente ID
        'EClDDXCngMunRubsXsyQQYIuTEqzL7vK4mjIlBw_oyNNKdZltpI_Ns7hKOVXqc_1abq5hVtHcvkdDsXH'//Secret
    )
 );

 //var_dump($apiContext);