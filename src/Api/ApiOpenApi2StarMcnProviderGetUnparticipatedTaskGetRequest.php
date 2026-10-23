<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_unparticipated_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 撮合中介-获取可接取任务列表
 */
class ApiOpenApi2StarMcnProviderGetUnparticipatedTaskGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?int $payType = null;
    /** @var int 最小创建时间 */
    private ?int $minCreateTimeStamp = null;
    /** @var int 最大创建时间 */
    private ?int $maxCreateTimeStamp = null;
    private ?int $firstClassCategory = null;
    private ?int $secondClassCategory = null;
    private ?int $productCategory = null;
    /** @var string 小程序id */
    private ?string $appId = null;
    /** @var string 小程序名称 */
    private ?string $appName = null;
    private ?int $demandId = null;
    private ?int $gameType = null;
    private ?int $componentType = null;
    private ?array $searchTags = null;
    private ?int $firstCategoryId = null;
    private ?int $secondCategoryId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnProviderGetUnparticipatedTaskV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
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

    public function payType(int $payType): self
    {
        $this->payType = $payType;
        return $this;
    }

    /**
     * 最小创建时间
     */
    public function minCreateTimeStamp(int $minCreateTimeStamp): self
    {
        $this->minCreateTimeStamp = $minCreateTimeStamp;
        return $this;
    }

    /**
     * 最大创建时间
     */
    public function maxCreateTimeStamp(int $maxCreateTimeStamp): self
    {
        $this->maxCreateTimeStamp = $maxCreateTimeStamp;
        return $this;
    }

    public function firstClassCategory(int $firstClassCategory): self
    {
        $this->firstClassCategory = $firstClassCategory;
        return $this;
    }

    public function secondClassCategory(int $secondClassCategory): self
    {
        $this->secondClassCategory = $secondClassCategory;
        return $this;
    }

    public function productCategory(int $productCategory): self
    {
        $this->productCategory = $productCategory;
        return $this;
    }

    /**
     * 小程序id
     */
    public function appId(string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 小程序名称
     */
    public function appName(string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    public function demandId(int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    public function gameType(int $gameType): self
    {
        $this->gameType = $gameType;
        return $this;
    }

    public function componentType(int $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    public function searchTags(array $searchTags): self
    {
        $this->searchTags = $searchTags;
        return $this;
    }

    public function firstCategoryId(int $firstCategoryId): self
    {
        $this->firstCategoryId = $firstCategoryId;
        return $this;
    }

    public function secondCategoryId(int $secondCategoryId): self
    {
        $this->secondCategoryId = $secondCategoryId;
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
     * 撮合中介-获取可接取任务列表
     */
    public function execute(): \Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 1) {
            throw new \InvalidArgumentException('pageSize must be greater than 1');
        }
        if ($this->pageSize > 10) {
            throw new \InvalidArgumentException('pageSize must be less than 10');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        if ($this->payType !== null) {
            $queryParams['pay_type'] = $this->payType;
        }
        if ($this->minCreateTimeStamp !== null) {
            $queryParams['min_create_time_stamp'] = $this->minCreateTimeStamp;
        }
        if ($this->maxCreateTimeStamp !== null) {
            $queryParams['max_create_time_stamp'] = $this->maxCreateTimeStamp;
        }
        if ($this->firstClassCategory !== null) {
            $queryParams['first_class_category'] = $this->firstClassCategory;
        }
        if ($this->secondClassCategory !== null) {
            $queryParams['second_class_category'] = $this->secondClassCategory;
        }
        if ($this->productCategory !== null) {
            $queryParams['product_category'] = $this->productCategory;
        }
        if ($this->appId !== null) {
            $queryParams['app_id'] = $this->appId;
        }
        if ($this->appName !== null) {
            $queryParams['app_name'] = $this->appName;
        }
        if ($this->demandId !== null) {
            $queryParams['demand_id'] = $this->demandId;
        }
        if ($this->gameType !== null) {
            $queryParams['game_type'] = $this->gameType;
        }
        if ($this->componentType !== null) {
            $queryParams['component_type'] = $this->componentType;
        }
        if ($this->searchTags !== null) {
            $queryParams['search_tags'] = $this->searchTags;
        }
        if ($this->firstCategoryId !== null) {
            $queryParams['first_category_id'] = $this->firstCategoryId;
        }
        if ($this->secondCategoryId !== null) {
            $queryParams['second_category_id'] = $this->secondCategoryId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/provider_get_unparticipated_task/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnProviderGetUnparticipatedTaskV2Response::class);

        return $result['model'];
    }
}
