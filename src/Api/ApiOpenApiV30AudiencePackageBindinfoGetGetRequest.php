<?php

/**
 * 本文件由 go2php 生成，源: api_audience_package_bindinfo_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 定向包查询关联项目信息
 */
class ApiOpenApiV30AudiencePackageBindinfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 定向包Id */
    private ?int $audiencePackageId = null;
    /** @var int 分页 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AudiencePackageBindinfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 定向包Id
     */
    public function audiencePackageId(int $audiencePackageId): self
    {
        $this->audiencePackageId = $audiencePackageId;
        return $this;
    }

    /**
     * 分页
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
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
     * 定向包查询关联项目信息
     */
    public function execute(): \Oceanengine\Models\AudiencePackageBindinfoGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->audiencePackageId === null) {
            throw new \InvalidArgumentException('audiencePackageId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 10) {
            throw new \InvalidArgumentException('pageSize must be greater than 10');
        }
        if ($this->pageSize > 100) {
            throw new \InvalidArgumentException('pageSize must be less than 100');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['audience_package_id'] = $this->audiencePackageId;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/audience_package_bindinfo/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AudiencePackageBindinfoGetV30Response::class);

        return $result['model'];
    }
}
