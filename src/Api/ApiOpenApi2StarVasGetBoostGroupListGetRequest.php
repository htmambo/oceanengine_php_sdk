<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_boost_group_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 拉取加热组列表
 */
class ApiOpenApi2StarVasGetBoostGroupListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户ID */
    private ?int $starId = null;
    /** @var int 页码，从1开始 */
    private ?int $page = null;
    /** @var int 页内数量，不能超过30 */
    private ?int $limit = null;
    /** @var string 助推组状态 */
    private ?string $status = null;
    /** @var int 小于指定助推组创建时间戳 */
    private ?int $ltCreateTime = null;
    /** @var int 大于指定助推组创建时间戳 */
    private ?int $gtCreateTime = null;
    /** @var int 视频所属任务ID */
    private ?int $itemOrderId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarVasGetBoostGroupListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 页码，从1开始
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页内数量，不能超过30
     */
    public function limit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * 助推组状态
     */
    public function status(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 小于指定助推组创建时间戳
     */
    public function ltCreateTime(int $ltCreateTime): self
    {
        $this->ltCreateTime = $ltCreateTime;
        return $this;
    }

    /**
     * 大于指定助推组创建时间戳
     */
    public function gtCreateTime(int $gtCreateTime): self
    {
        $this->gtCreateTime = $gtCreateTime;
        return $this;
    }

    /**
     * 视频所属任务ID
     */
    public function itemOrderId(int $itemOrderId): self
    {
        $this->itemOrderId = $itemOrderId;
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
     * 拉取加热组列表
     */
    public function execute(): \Oceanengine\Models\StarVasGetBoostGroupListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->page < 1) {
            throw new \InvalidArgumentException('page must be greater than 1');
        }
        if ($this->limit === null) {
            throw new \InvalidArgumentException('limit is required and must be specified');
        }
        if ($this->limit < 1) {
            throw new \InvalidArgumentException('limit must be greater than 1');
        }
        if ($this->limit > 30) {
            throw new \InvalidArgumentException('limit must be less than 30');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['page'] = $this->page;
        $queryParams['limit'] = $this->limit;
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->ltCreateTime !== null) {
            $queryParams['lt_create_time'] = $this->ltCreateTime;
        }
        if ($this->gtCreateTime !== null) {
            $queryParams['gt_create_time'] = $this->gtCreateTime;
        }
        if ($this->itemOrderId !== null) {
            $queryParams['item_order_id'] = $this->itemOrderId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/vas/get_boost_group_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarVasGetBoostGroupListV2Response::class);

        return $result['model'];
    }
}
