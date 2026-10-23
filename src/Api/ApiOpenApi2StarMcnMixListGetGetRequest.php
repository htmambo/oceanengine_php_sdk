<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_mix_list_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 撮合服务商-获取剧集维度投后数据
 */
class ApiOpenApi2StarMcnMixListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 服务商星图ID */
    private ?int $starId = null;
    /** @var int 任务ID */
    private ?int $demandId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?int $developerId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnMixListGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 服务商星图ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 任务ID
     */
    public function demandId(int $demandId): self
    {
        $this->demandId = $demandId;
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

    public function developerId(int $developerId): self
    {
        $this->developerId = $developerId;
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
     * 撮合服务商-获取剧集维度投后数据
     */
    public function execute(): \Oceanengine\Models\StarMcnMixListGetV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->demandId === null) {
            throw new \InvalidArgumentException('demandId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['demand_id'] = $this->demandId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->developerId !== null) {
            $queryParams['developer_id'] = $this->developerId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/mix/list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnMixListGetV2Response::class);

        return $result['model'];
    }
}
