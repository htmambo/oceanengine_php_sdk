<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_material_ad_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取推广列表中素材关联的计划list
 */
class ApiOpenApiV10QianchuanMaterialAdGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 素材id */
    private ?int $materialId = null;
    private ?string $materialType = null;
    private ?string $marketingScene = null;
    private ?string $marketingGoal = null;
    /** @var string 查询起始日期 */
    private ?string $startTime = null;
    /** @var string 查询结束日期 */
    private ?string $endTime = null;
    /** @var string[] 查询指标 */
    private ?array $fields = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var \Oceanengine\Models\QianchuanMaterialAdGetV10PageSize 页面大小 */
    private ?\Oceanengine\Models\QianchuanMaterialAdGetV10PageSize $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanMaterialAdGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材id
     */
    public function materialId(int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    public function materialType(string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    public function marketingScene(string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 查询起始日期
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 查询结束日期
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 查询指标
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(\Oceanengine\Models\QianchuanMaterialAdGetV10PageSize $pageSize): self
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
     * 获取推广列表中素材关联的计划list
     */
    public function execute(): \Oceanengine\Models\QianchuanMaterialAdGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->materialId === null) {
            throw new \InvalidArgumentException('materialId is required and must be specified');
        }
        if ($this->materialType === null) {
            throw new \InvalidArgumentException('materialType is required and must be specified');
        }
        if ($this->marketingScene === null) {
            throw new \InvalidArgumentException('marketingScene is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        if (count($this->fields) < 1) {
            throw new \InvalidArgumentException('fields must have at least 1 elements');
        }
        if (count($this->fields) > 20) {
            throw new \InvalidArgumentException('fields must have less than 20 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['material_id'] = $this->materialId;
        $queryParams['material_type'] = $this->materialType;
        $queryParams['marketing_scene'] = $this->marketingScene;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $queryParams['fields'] = $this->fields;
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $__encoded0 = json_encode($this->pageSize);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageSize');
            }
            $queryParams['page_size'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/material/ad/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanMaterialAdGetV10Response::class);

        return $result['model'];
    }
}
