<?php

/**
 * 本文件由 go2php 生成，源: api_local_aweme_auth_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 抖音号授权列表
 */
class ApiOpenApiV30LocalAwemeAuthListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户id */
    private ?int $localAccountId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var \Oceanengine\Models\LocalAwemeAuthListV30Filtering 过滤器 */
    private ?\Oceanengine\Models\LocalAwemeAuthListV30Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalAwemeAuthListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户id
     */
    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
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
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\LocalAwemeAuthListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 抖音号授权列表
     */
    public function execute(): \Oceanengine\Models\LocalAwemeAuthListV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/aweme_auth/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalAwemeAuthListV30Response::class);

        return $result['model'];
    }
}
