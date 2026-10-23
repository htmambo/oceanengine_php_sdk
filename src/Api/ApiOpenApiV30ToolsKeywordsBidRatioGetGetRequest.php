<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_bid_ratio_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 账户优词工具-查询优词
 */
class ApiOpenApiV30ToolsKeywordsBidRatioGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\Models\ToolsKeywordsBidRatioGetV30Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsKeywordsBidRatioGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function filtering(\Oceanengine\Models\ToolsKeywordsBidRatioGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 账户优词工具-查询优词
     */
    public function execute(): \Oceanengine\Models\ToolsKeywordsBidRatioGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/keywords_bid_ratio/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsKeywordsBidRatioGetV30Response::class);

        return $result['model'];
    }
}
