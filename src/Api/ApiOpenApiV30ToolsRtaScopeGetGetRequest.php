<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_scope_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取RTA策略下的项目(广告组)列表，一个rta策略要么绑定campaign要么绑定project，不可能同时绑定
 */
class ApiOpenApiV30ToolsRtaScopeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $rtaId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsRtaScopeGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function rtaId(int $rtaId): self
    {
        $this->rtaId = $rtaId;
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
     * 获取RTA策略下的项目(广告组)列表，一个rta策略要么绑定campaign要么绑定project，不可能同时绑定
     */
    public function execute(): \Oceanengine\Models\ToolsRtaScopeGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->rtaId === null) {
            throw new \InvalidArgumentException('rtaId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['rta_id'] = $this->rtaId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/rta/scope/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsRtaScopeGetV30Response::class);

        return $result['model'];
    }
}
