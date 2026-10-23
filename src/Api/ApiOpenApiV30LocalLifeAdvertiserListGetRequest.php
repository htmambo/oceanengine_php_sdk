<?php

/**
 * 本文件由 go2php 生成，源: api_local_life_advertiser_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过来客账户查关联本地账户接口
 */
class ApiOpenApiV30LocalLifeAdvertiserListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $lifeAccountId = null;
    /** @var \Oceanengine\Models\LocalLifeAdvertiserListV30Filtering 过滤器 */
    private ?\Oceanengine\Models\LocalLifeAdvertiserListV30Filtering $filtering = null;
    /** @var int 页码，默认1 */
    private ?int $page = null;
    /** @var int 每页条数，默认10，最大100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalLifeAdvertiserListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function lifeAccountId(int $lifeAccountId): self
    {
        $this->lifeAccountId = $lifeAccountId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\LocalLifeAdvertiserListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码，默认1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页条数，默认10，最大100
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
     * 通过来客账户查关联本地账户接口
     */
    public function execute(): \Oceanengine\Models\LocalLifeAdvertiserListV30Response
    {
        if ($this->lifeAccountId === null) {
            throw new \InvalidArgumentException('lifeAccountId is required and must be specified');
        }
        if ($this->lifeAccountId < 1) {
            throw new \InvalidArgumentException('lifeAccountId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['life_account_id'] = $this->lifeAccountId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/life/advertiser/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalLifeAdvertiserListV30Response::class);

        return $result['model'];
    }
}
