<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_rit_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 投放点位屏蔽or放开功能，生效有延迟
 */
class ApiOpenApiV10UbaToolRitUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\UbaToolRitUpdateV10Request $ubaToolRitUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UbaToolRitUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ubaToolRitUpdateV10Request(\Oceanengine\Models\UbaToolRitUpdateV10Request $ubaToolRitUpdateV10Request): self
    {
        $this->ubaToolRitUpdateV10Request = $ubaToolRitUpdateV10Request;
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
     * 投放点位屏蔽or放开功能，生效有延迟
     */
    public function execute(): \Oceanengine\Models\UbaToolRitUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ubaToolRitUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/uba_tool/rit/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UbaToolRitUpdateV10Response::class);

        return $result['model'];
    }
}
