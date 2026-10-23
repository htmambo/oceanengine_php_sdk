<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_info_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据线索id获取对应线索的信息，包括返款标签等
 */
class ApiOpenApi2ToolsClueInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主id列表，最多100个 */
    private ?array $advertiserIds = null;
    /** @var int[] 线索id列表，最多100个 */
    private ?array $clueIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueInfoGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id列表，最多100个
     */
    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 线索id列表，最多100个
     */
    public function clueIds(array $clueIds): self
    {
        $this->clueIds = $clueIds;
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
     * 根据线索id获取对应线索的信息，包括返款标签等
     */
    public function execute(): \Oceanengine\Models\ToolsClueInfoGetV2Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        if (count($this->advertiserIds) < 1) {
            throw new \InvalidArgumentException('advertiserIds must have at least 1 elements');
        }
        if (count($this->advertiserIds) > 100) {
            throw new \InvalidArgumentException('advertiserIds must have less than 100 elements');
        }
        if ($this->clueIds === null) {
            throw new \InvalidArgumentException('clueIds is required and must be specified');
        }
        if (count($this->clueIds) < 1) {
            throw new \InvalidArgumentException('clueIds must have at least 1 elements');
        }
        if (count($this->clueIds) > 100) {
            throw new \InvalidArgumentException('clueIds must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        $queryParams['clue_ids'] = $this->clueIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueInfoGetV2Response::class);

        return $result['model'];
    }
}
