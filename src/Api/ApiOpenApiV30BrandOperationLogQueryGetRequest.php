<?php

/**
 * 本文件由 go2php 生成，源: api_brand_operation_log_query_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 操作日志查询
 */
class ApiOpenApiV30BrandOperationLogQueryGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 查询对象ID */
    private ?int $objectId = null;
    /** @var string 查询类型 */
    private ?string $objectType = null;
    /** @var string[] 查询范围 */
    private ?array $fields = null;
    /** @var string 开始日期 */
    private ?string $startDate = null;
    /** @var string 结束日期 */
    private ?string $endDate = null;
    /** @var \Oceanengine\Models\BrandOperationLogQueryV30Page 分页 */
    private ?\Oceanengine\Models\BrandOperationLogQueryV30Page $page = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandOperationLogQueryV30ApiService $service)
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

    /**
     * 查询对象ID
     */
    public function objectId(int $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * 查询类型
     */
    public function objectType(string $objectType): self
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * 查询范围
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 开始日期
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 结束日期
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 分页
     */
    public function page(\Oceanengine\Models\BrandOperationLogQueryV30Page $page): self
    {
        $this->page = $page;
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
     * 操作日志查询
     */
    public function execute(): \Oceanengine\Models\BrandOperationLogQueryV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->objectId === null) {
            throw new \InvalidArgumentException('objectId is required and must be specified');
        }
        if ($this->objectType === null) {
            throw new \InvalidArgumentException('objectType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['object_id'] = $this->objectId;
        $queryParams['object_type'] = $this->objectType;
        if ($this->fields !== null) {
            $queryParams['fields'] = $this->fields;
        }
        if ($this->startDate !== null) {
            $queryParams['start_date'] = $this->startDate;
        }
        if ($this->endDate !== null) {
            $queryParams['end_date'] = $this->endDate;
        }
        if ($this->page !== null) {
            $__encoded0 = json_encode($this->page);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: page');
            }
            $queryParams['page'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/operation_log/query/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandOperationLogQueryV30Response::class);

        return $result['model'];
    }
}
