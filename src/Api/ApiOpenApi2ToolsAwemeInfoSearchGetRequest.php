<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_info_search_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询抖音帐号和类目信息
 */
class ApiOpenApi2ToolsAwemeInfoSearchGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $queryWord = null;
    private ?array $behaviors = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAwemeInfoSearchV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function queryWord(string $queryWord): self
    {
        $this->queryWord = $queryWord;
        return $this;
    }

    public function behaviors(array $behaviors): self
    {
        $this->behaviors = $behaviors;
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
     * 查询抖音帐号和类目信息
     */
    public function execute(): \Oceanengine\Models\ToolsAwemeInfoSearchV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->queryWord === null) {
            throw new \InvalidArgumentException('queryWord is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['query_word'] = $this->queryWord;
        if ($this->behaviors !== null) {
            $queryParams['behaviors'] = $this->behaviors;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/aweme_info_search/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAwemeInfoSearchV2Response::class);

        return $result['model'];
    }
}
