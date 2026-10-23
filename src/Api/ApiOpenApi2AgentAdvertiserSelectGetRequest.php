<?php

/**
 * 本文件由 go2php 生成，源: api_agent_advertiser_select_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取代理商下的广告主账号列表
 */
class ApiOpenApi2AgentAdvertiserSelectGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $companyIds = null;
    private ?int $count = null;
    private ?int $cursor = null;
    private ?\Oceanengine\Models\AgentAdvertiserSelectV2Filtering $filtering = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AgentAdvertiserSelectV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function companyIds(array $companyIds): self
    {
        $this->companyIds = $companyIds;
        return $this;
    }

    public function count(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function filtering(\Oceanengine\Models\AgentAdvertiserSelectV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 获取代理商下的广告主账号列表
     */
    public function execute(): \Oceanengine\Models\AgentAdvertiserSelectV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
        if ($this->companyIds !== null) {
            $queryParams['company_ids'] = $this->companyIds;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/agent/advertiser/select/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AgentAdvertiserSelectV2Response::class);

        return $result['model'];
    }
}
