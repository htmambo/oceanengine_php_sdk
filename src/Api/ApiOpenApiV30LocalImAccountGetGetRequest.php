<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取根户下的区域/门店生服账户信息和广告信息
 */
class ApiOpenApiV30LocalImAccountGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 总户id */
    private ?int $lifeAccountId = null;
    /** @var string 需要拉取的来客账户类型 */
    private ?string $queryLifeAccountType = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalImAccountGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 总户id
     */
    public function lifeAccountId(int $lifeAccountId): self
    {
        $this->lifeAccountId = $lifeAccountId;
        return $this;
    }

    /**
     * 需要拉取的来客账户类型
     */
    public function queryLifeAccountType(string $queryLifeAccountType): self
    {
        $this->queryLifeAccountType = $queryLifeAccountType;
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
     * 页大小
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
     * 获取根户下的区域/门店生服账户信息和广告信息
     */
    public function execute(): \Oceanengine\Models\LocalImAccountGetV30Response
    {
        if ($this->lifeAccountId === null) {
            throw new \InvalidArgumentException('lifeAccountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['life_account_id'] = $this->lifeAccountId;
        if ($this->queryLifeAccountType !== null) {
            $queryParams['query_life_account_type'] = $this->queryLifeAccountType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/im/account/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalImAccountGetV30Response::class);

        return $result['model'];
    }
}
