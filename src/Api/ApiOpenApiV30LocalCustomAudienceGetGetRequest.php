<?php

/**
 * 本文件由 go2php 生成，源: api_local_custom_audience_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询创编可用人群包
 */
class ApiOpenApiV30LocalCustomAudienceGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $localAccountId = null;
    /** @var string 筛选条件：人群包属性 */
    private ?string $tagsType = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 返回数据量，默认值：100，取值范围：1-1000 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalCustomAudienceGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 筛选条件：人群包属性
     */
    public function tagsType(string $tagsType): self
    {
        $this->tagsType = $tagsType;
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
     * 返回数据量，默认值：100，取值范围：1-1000
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
     * 查询创编可用人群包
     */
    public function execute(): \Oceanengine\Models\LocalCustomAudienceGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->tagsType !== null) {
            $queryParams['tags_type'] = $this->tagsType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/custom_audience/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalCustomAudienceGetV30Response::class);

        return $result['model'];
    }
}
