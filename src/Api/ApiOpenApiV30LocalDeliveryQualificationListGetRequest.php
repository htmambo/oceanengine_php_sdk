<?php

/**
 * 本文件由 go2php 生成，源: api_local_delivery_qualification_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取投放资质
 */
class ApiOpenApiV30LocalDeliveryQualificationListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $localAccountId = null;
    /** @var int 默认值1， [1, 1000] */
    private ?int $page = null;
    /** @var int 默认值10，[1, 100] */
    private ?int $pageSize = null;
    /** @var string 投放资质类型：不传则返回所有类型的投放资质 */
    private ?string $qualificationType = null;
    /** @var string 资质状态 */
    private ?string $status = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalDeliveryQualificationListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 默认值1， [1, 1000]
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 默认值10，[1, 100]
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 投放资质类型：不传则返回所有类型的投放资质
     */
    public function qualificationType(string $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * 资质状态
     */
    public function status(string $status): self
    {
        $this->status = $status;
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
     * 获取投放资质
     */
    public function execute(): \Oceanengine\Models\LocalDeliveryQualificationListV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->qualificationType !== null) {
            $queryParams['qualification_type'] = $this->qualificationType;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/delivery_qualification/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalDeliveryQualificationListV30Response::class);

        return $result['model'];
    }
}
