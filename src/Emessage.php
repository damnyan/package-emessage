<?php

namespace Dmn\Emessage;

interface Emessage
{
    /**
     * Send
     *
     * @param string $mobileNumber
     * @param string $message
     *
     * @return void
     */
    public function send(
        string $mobileNumber,
        string $message,
    ): void;

    /**
     * Mock response
     *
     * @param string $file
     * @param integer $status
     * @param array $headers
     * @param boolean $isFullPath
     * @return void
     */
    public static function mockResponse(
        string $file = 'send_success.json',
        int $status = 200,
        array $headers = [],
        bool $isFullPath = false
    ): void;

    /**
     * Mock queue response
     *
     * @param string $responses
     * @return void
     */
    public static function mockQueueResponse(array $responses): void;
}
