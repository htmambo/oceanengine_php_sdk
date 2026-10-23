<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_card_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询线索私信消息卡片
 */
class ApiOpenApiV30LocalImCardGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var int 账户id */
    private ?int $lifeAccountId = null;
    /** @var string 请求来源 */
    private ?string $sourceName = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 每页数量 */
    private ?int $pageSize = null;
    /** @var int 卡片类型 6-新版留资卡 */
    private ?int $cardType = null;
    /** @var int 卡片状态，不传代表查所有状态 0：审核中 1：生效 2：审核失败 */
    private ?int $status = null;
    /** @var int[] 卡片id */
    private ?array $cardIdList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalImCardGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 账户id
     */
    public function lifeAccountId(int $lifeAccountId): self
    {
        $this->lifeAccountId = $lifeAccountId;
        return $this;
    }

    /**
     * 请求来源
     */
    public function sourceName(string $sourceName): self
    {
        $this->sourceName = $sourceName;
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
     * 每页数量
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 卡片类型 6-新版留资卡
     */
    public function cardType(int $cardType): self
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * 卡片状态，不传代表查所有状态 0：审核中 1：生效 2：审核失败
     */
    public function status(int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 卡片id
     */
    public function cardIdList(array $cardIdList): self
    {
        $this->cardIdList = $cardIdList;
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
     * 查询线索私信消息卡片
     */
    public function execute(): \Oceanengine\Models\LocalImCardGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->lifeAccountId === null) {
            throw new \InvalidArgumentException('lifeAccountId is required and must be specified');
        }
        if ($this->sourceName === null) {
            throw new \InvalidArgumentException('sourceName is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->page > 50) {
            throw new \InvalidArgumentException('page must be less than 50');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->pageSize < 1) {
            throw new \InvalidArgumentException('pageSize must be greater than 1');
        }
        if ($this->pageSize > 50) {
            throw new \InvalidArgumentException('pageSize must be less than 50');
        }
        if ($this->cardType === null) {
            throw new \InvalidArgumentException('cardType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $queryParams['life_account_id'] = $this->lifeAccountId;
        $queryParams['source_name'] = $this->sourceName;
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $queryParams['card_type'] = $this->cardType;
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->cardIdList !== null) {
            $queryParams['card_id_list'] = $this->cardIdList;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/im_card/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalImCardGetV30Response::class);

        return $result['model'];
    }
}
