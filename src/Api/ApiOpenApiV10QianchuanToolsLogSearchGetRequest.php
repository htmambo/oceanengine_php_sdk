<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_log_search_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 新增接口，支持查询操作日志
 */
class ApiOpenApiV10QianchuanToolsLogSearchGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    private ?string $objectType = null;
    /** @var int 操作对象ID, 可以为ad_id */
    private ?int $objectId = null;
    /** @var int[] 操作人id */
    private ?array $operatorId = null;
    /** @var string 日志查询开始时间，格式 \&quot;2019-07-24 21:46:57\&quot; 注意：开始时间不可超过当前时间-180天 */
    private ?string $startTime = null;
    /** @var string 日志查询结束时间，格式 \&quot;2019-07-24 21:46:57\&quot; 注意：结束时间不可超过当前时间-180天 */
    private ?string $endTime = null;
    /** @var int 页码 默认值: 1 */
    private ?int $page = null;
    /** @var int 页面大小 默认值: 10允许值:1~20 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsLogSearchV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function objectType(string $objectType): self
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * 操作对象ID, 可以为ad_id
     */
    public function objectId(int $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * 操作人id
     */
    public function operatorId(array $operatorId): self
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * 日志查询开始时间，格式 \&quot;2019-07-24 21:46:57\&quot; 注意：开始时间不可超过当前时间-180天
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 日志查询结束时间，格式 \&quot;2019-07-24 21:46:57\&quot; 注意：结束时间不可超过当前时间-180天
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 页码 默认值: 1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小 默认值: 10允许值:1~20
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
     * 新增接口，支持查询操作日志
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsLogSearchV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->objectType === null) {
            throw new \InvalidArgumentException('objectType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->objectId !== null) {
            $queryParams['object_id'] = $this->objectId;
        }
        $queryParams['object_type'] = $this->objectType;
        if ($this->operatorId !== null) {
            $queryParams['operator_id'] = $this->operatorId;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/log_search/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsLogSearchV10Response::class);

        return $result['model'];
    }
}
