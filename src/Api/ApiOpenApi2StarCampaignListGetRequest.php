<?php

/**
 * 本文件由 go2php 生成，源: api_star_campaign_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取需求列表
 */
class ApiOpenApi2StarCampaignListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 星图客户ID */
    private ?int $starId = null;
    /** @var string 搜索名称 少于20字 */
    private ?string $searchName = null;
    /** @var int 分页页码 */
    private ?int $page = null;
    /** @var int 页大小 */
    private ?int $limit = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarCampaignListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 星图客户ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 搜索名称 少于20字
     */
    public function searchName(string $searchName): self
    {
        $this->searchName = $searchName;
        return $this;
    }

    /**
     * 分页页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页大小
     */
    public function limit(int $limit): self
    {
        $this->limit = $limit;
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
     * 获取需求列表
     */
    public function execute(): \Oceanengine\Models\StarCampaignListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->searchName !== null) {
            $queryParams['search_name'] = $this->searchName;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->limit !== null) {
            $queryParams['limit'] = $this->limit;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/campaign/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarCampaignListV2Response::class);

        return $result['model'];
    }
}
