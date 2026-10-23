<?php

/**
 * 本文件由 go2php 生成，源: api_aic_element_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据原料库的元素id，更新名称或者路径
 */
class ApiOpenApiV30AicElementUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AicElementUpdateV30Request $aicElementUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicElementUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function aicElementUpdateV30Request(\Oceanengine\Models\AicElementUpdateV30Request $aicElementUpdateV30Request): self
    {
        $this->aicElementUpdateV30Request = $aicElementUpdateV30Request;
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
     * 根据原料库的元素id，更新名称或者路径
     */
    public function execute(): \Oceanengine\Models\AicElementUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->aicElementUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/element/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicElementUpdateV30Response::class);

        return $result['model'];
    }
}
