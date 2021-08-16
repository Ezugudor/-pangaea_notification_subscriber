<?php


namespace App\Api\V1\Controllers;

use App\Contracts\Services\IMessageService;
use App\Http\Request\MessageRequest;
use Illuminate\Http\Request;


class MessageController extends BaseController
{

    private $messageService;

    public function __construct(IMessageService $messageService)
    {
        $this->messageService = $messageService;
    }


    public function receive(Request $request, MessageRequest $messageRequest)
    {

        $validation = $messageRequest->validate($request);

        if ($validation->fails()) {
            $response_message = $this->customHttpResponse(400, 'Incorrect details fill required fields.', $validation->errors());
            return $response_message;
        }

        return $this->messageService->processMessage();
    }
}
