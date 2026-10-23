<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全域推广列表
 */
class ApiOpenApiV10QianchuanUniPromotionListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?string $marketingGoal = null;
    private ?array $fields = null;
    /** @var \Oceanengine\Models\QianchuanUniPromotionListV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanUniPromotionListV10Filtering $filtering = null;
    /** @var bool 是否获取成本保障信息 */
    private ?bool $needCompensateInfo = null;
    private ?string $orderType = null;
    private ?string $orderField = null;
    private ?int $page = null;
    private ?\Oceanengine\Models\QianchuanUniPromotionListV10PageSize $pageSize = null;
    /** @var string 计划类型（全域 or 乘方） */
    private ?string $adlabScene = null;
    private ?string $dataPeriod = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionListV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanUniPromotionListV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 是否获取成本保障信息
     */
    public function needCompensateInfo(bool $needCompensateInfo): self
    {
        $this->needCompensateInfo = $needCompensateInfo;
        return $this;
    }

    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(\Oceanengine\Models\QianchuanUniPromotionListV10PageSize $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 计划类型（全域 or 乘方）
     */
    public function adlabScene(string $adlabScene): self
    {
        $this->adlabScene = $adlabScene;
        return $this;
    }

    public function dataPeriod(string $dataPeriod): self
    {
        $this->dataPeriod = $dataPeriod;
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
     * 获取全域推广列表
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionListV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->needCompensateInfo !== null) {
            $queryParams['need_compensate_info'] = $this->needCompensateInfo;
        }
        $queryParams['fields'] = $this->fields;
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
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
        if ($this->adlabScene !== null) {
            $queryParams['adlab_scene'] = $this->adlabScene;
        }
        if ($this->dataPeriod !== null) {
            $queryParams['data_period'] = $this->dataPeriod;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionListV10Response::class);

        return $result['model'];
    }
}
