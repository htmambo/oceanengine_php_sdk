<?php

/**
 * 本文件由 go2php 生成，源: api_creative_strategy_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取白盒策略列表，支持搜索
 */
class ApiOpenApi2CreativeStrategyListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string[] 策略类型(支持多选) */
    private ?array $strategyTypes = null;
    /** @var int 页码，从1开始, 默认1 */
    private ?int $page = null;
    /** @var int 分页大小, 取值[1-100], 默认10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CreativeStrategyListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 策略类型(支持多选)
     */
    public function strategyTypes(array $strategyTypes): self
    {
        $this->strategyTypes = $strategyTypes;
        return $this;
    }

    /**
     * 页码，从1开始, 默认1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 分页大小, 取值[1-100], 默认10
     */
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
     * 获取白盒策略列表，支持搜索
     */
    public function execute(): \Oceanengine\Models\CreativeStrategyListV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->strategyTypes !== null) {
            $queryParams['strategy_types'] = $this->strategyTypes;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/creative/strategy/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CreativeStrategyListV2Response::class);

        return $result['model'];
    }
}
