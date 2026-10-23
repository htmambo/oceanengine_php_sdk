<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_material_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取账户下素材列表和数据
 */
class ApiOpenApiV10QianchuanMaterialGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    private ?string $marketingScene = null;
    /** @var \Oceanengine\Models\QianchuanMaterialGetV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanMaterialGetV10Filtering $filtering = null;
    /** @var string[] 查询指标 */
    private ?array $fields = null;
    private ?array $campaignScene = null;
    private ?int $page = null;
    private ?\Oceanengine\Models\QianchuanMaterialGetV10PageSize $pageSize = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanMaterialGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function marketingScene(string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanMaterialGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
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

    public function campaignScene(array $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(\Oceanengine\Models\QianchuanMaterialGetV10PageSize $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 排序字段
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
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
     * 获取账户下素材列表和数据
     */
    public function execute(): \Oceanengine\Models\QianchuanMaterialGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->marketingScene === null) {
            throw new \InvalidArgumentException('marketingScene is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        if ($this->campaignScene !== null) {
            $queryParams['campaign_scene'] = $this->campaignScene;
        }
        $queryParams['marketing_scene'] = $this->marketingScene;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        $queryParams['fields'] = $this->fields;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $__encoded1 = json_encode($this->pageSize);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageSize');
            }
            $queryParams['page_size'] = $__encoded1;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/material/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanMaterialGetV10Response::class);

        return $result['model'];
    }
}
