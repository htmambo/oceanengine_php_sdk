<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_lite_contact_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 轻量化api-进行话单获取接口
 */
class ApiOpenApi2ToolsClueLiteContactGetPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueLiteContactGetV2Request $toolsClueLiteContactGetV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueLiteContactGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueLiteContactGetV2Request(\Oceanengine\Models\ToolsClueLiteContactGetV2Request $toolsClueLiteContactGetV2Request): self
    {
        $this->toolsClueLiteContactGetV2Request = $toolsClueLiteContactGetV2Request;
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
     * 轻量化api-进行话单获取接口
     */
    public function execute(): \Oceanengine\Models\ToolsClueLiteContactGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueLiteContactGetV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/lite/contact/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueLiteContactGetV2Response::class);

        return $result['model'];
    }
}
