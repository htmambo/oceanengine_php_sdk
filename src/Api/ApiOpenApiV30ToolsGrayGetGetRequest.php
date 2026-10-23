<?php

/**
 * 本文件由 go2php 生成，源: api_tools_gray_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持客户通过接口查询广告主是否命中各项灰度/白名单功能
 */
class ApiOpenApiV30ToolsGrayGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $grayKeys = null;
    private ?string $version = null;
    private ?int $bpId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsGrayGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function grayKeys(array $grayKeys): self
    {
        $this->grayKeys = $grayKeys;
        return $this;
    }

    public function version(string $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function bpId(int $bpId): self
    {
        $this->bpId = $bpId;
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
     * 支持客户通过接口查询广告主是否命中各项灰度/白名单功能
     */
    public function execute(): \Oceanengine\Models\ToolsGrayGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->grayKeys === null) {
            throw new \InvalidArgumentException('grayKeys is required and must be specified');
        }
        if (count($this->grayKeys) < 1) {
            throw new \InvalidArgumentException('grayKeys must have at least 1 elements');
        }
        if (count($this->grayKeys) > 1) {
            throw new \InvalidArgumentException('grayKeys must have less than 1 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['gray_keys'] = $this->grayKeys;
        if ($this->version !== null) {
            $queryParams['version'] = $this->version;
        }
        if ($this->bpId !== null) {
            $queryParams['bp_id'] = $this->bpId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/gray/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsGrayGetV30Response::class);

        return $result['model'];
    }
}
