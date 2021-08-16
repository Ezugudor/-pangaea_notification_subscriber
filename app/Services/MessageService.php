<?php

namespace App\Services;

use App\Contracts\Services\IMessageService;
use Illuminate\Http\Request;


class MessageService extends BaseService implements IMessageService
{

    private $request;


    public function __construct(Request $request)
    {
        $this->request = $request;
    }



    public function processMessage()
    {
        $requestData = $this->request->data;
        $response_message = $this->customHttpResponse(200, 'Notification Message received successfully.', $requestData);
        return $response_message;
    }
}
