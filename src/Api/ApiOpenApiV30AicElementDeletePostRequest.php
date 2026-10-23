<?php

/**
 * 本文件由 go2php 生成，源: api_aic_element_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 输入element_id，删除对应的元素(文件、文件夹)
 */
class ApiOpenApiV30AicElementDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AicElementDeleteV30Request $aicElementDeleteV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicElementDeleteV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function aicElementDeleteV30Request(\Oceanengine\Models\AicElementDeleteV30Request $aicElementDeleteV30Request): self
    {
        $this->aicElementDeleteV30Request = $aicElementDeleteV30Request;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 输入element_id，删除对应的元素(文件、文件夹)
     */
    public function execute(): \Oceanengine\Models\AicElementDeleteV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->aicElementDeleteV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/element/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicElementDeleteV30Response::class);

        return $result['model'];
    }
}
