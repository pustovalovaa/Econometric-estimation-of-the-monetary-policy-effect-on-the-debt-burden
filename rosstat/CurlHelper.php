<?php

class CurlHelper
{
    private static array $userAgents = [
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.3538.77 Safari/537.36',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.9999.999 Safari/537.36',
        'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4598.0 Safari/537.36'
    ];

    private static $curl = null;
    private static array $curlOptions = [];

    /**
     * @return string
     * @throws \Exception
     */
    public static function get(): string
    {
        curl_setopt_array(self::$curl, self::$curlOptions);

        $response = curl_exec(self::$curl);

        // обработка ошибок
        if (curl_errno(self::$curl)) {
            $errorMessage = PHP_EOL . curl_error(self::$curl);
            throw new \Exception($errorMessage);
        }

        //print_r(curl_getinfo(self::$curl));

        curl_close(self::$curl);
        self::$curl = null;
        self::$curlOptions = [];

        return $response;
    }

    /**
     * @param string $url
     * @return self
     */
    public static function parseData(string $url): self {
        self::$curl = curl_init();

        self::$curlOptions = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
                'accept: */*',
                'pragma: no-cache',
                'cache-control: no-cache',
                'user-agent: ' . self::getUserAgent(),
            ],
        ];

        return new self;
    }

    /**
     * @return string
     */
    private static function getUserAgent(): string
    {
        $random = (int)rand(0, 2);
        return self::$userAgents[$random];
    }
}