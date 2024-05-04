<?php

namespace App\Controllers;

class ErrorController {

    /**
     * 404 method: Not Found
     *
     * @param string $message
     * @return void
     */
    public static function notFound(string $message = 'Resource not found') {
        http_response_code(404);

        loadView('error', [
            'status' => '404',
            'message' => $message
        ]);
    }

    /**
     * 403 method: Unauthorized
     *
     * @param string $message
     * @return void
     */
    public static function unauthorized(string $message = 'You are not authorized to view this resource') {
        http_response_code(403);

        loadView('error', [
            'status' => '403',
            'message' => $message
        ]);
    }
}