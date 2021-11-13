<?php

namespace Haritsyp\Kiriminaja\Helpers;

trait ApiRequester
{
    /**
     * @param string $uri
     * @param array $param
     * @return mixed
     */
    protected function get($uri, $param)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        if ($param) {
            $query = http_build_query($param);
            $url = $url . '?' . $query;
        }

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return json_decode($err);
        }

        return json_decode($response, false);
    }

    /**
     * @param string $uri
     * @param array $body
     * @return mixed
     */
    protected function post($uri, $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return json_decode($err, false);
        }

        return json_decode($response, false);
    }

    /**
     * @param string $uri
     * @param array $body
     * @return mixed
     */
    protected function put($uri, $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return json_decode($err, false);
        }

        return json_decode($response, false);
    }

    /**
     * @param string $uri
     * @param array $body
     * @return mixed
     */
    protected function patch($uri, $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return json_decode($err, false);
        }

        return json_decode($response, false);
    }

    /**
     * @param string $uri
     * @param array $body
     * @return mixed
     */
    protected function delete($uri, $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "Authorization: Bearer " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return json_decode($err, false);
        }

        return json_decode($response, false);
    }
}
