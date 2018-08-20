<?php

namespace Domain\Admin\Users\Consumers;

use App\Services\Http\RequestBuilder;

class AdminUsersConsumer
{
    private $baseUrl = null;
    private $apiPubKey = null;
    private $apiPrivKey = null;

    public function __construct()
    {
        $this->baseUrl = env('API_URL','http://gateway.marvel.com/v1/public/');
        $this->apiPubKey = env('API_PUBLIC_KEY','nao configurado');
        $this->apiPrivKey = env('API_PRIVATE_KEY','nao configurado');
    
    }

    public function filterList( $filters = [])
    {
        $queryString = [ 'ts' => time(),
                        'apikey' => $this->apiPubKey,
                        'hash' => md5( time() . $this->apiPrivKey . $this->apiPubKey ),
                        ];
        $requestApi = new RequestBuilder( $this->baseUrl.'characters' ,
                                            "GET" , 
                                            ["filters" => $filters ],  
                                            [ ],
                                            $queryString
                                        );
        return  json_decode( $requestApi->send() );
    }

}
