<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_carousel_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 素材库图文素材列表
 */
class ApiOpenApiV30LocalFileCarouselListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var string 关键词筛选，文件名称 或 id */
    private ?string $keyword = null;
    /** @var int[] 图文carousel_id筛选，范围[0,10] */
    private ?array $carouselIds = null;
    /** @var string 根据图文上传时间进行过滤的起始时间，与end_time搭配使用。 格式：\&quot;yyyy-mm-dd HH:MM:SS\&quot; */
    private ?string $startTime = null;
    /** @var string 根据图文上传时间进行过滤的结束时间，与start_time搭配使用。 格式：\&quot;yyyy-mm-dd HH:MM:SS\&quot; */
    private ?string $endTime = null;
    private ?\Oceanengine\Models\LocalFileCarouselListV30Order $order = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalFileCarouselListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 关键词筛选，文件名称 或 id
     */
    public function keyword(string $keyword): self
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * 图文carousel_id筛选，范围[0,10]
     */
    public function carouselIds(array $carouselIds): self
    {
        $this->carouselIds = $carouselIds;
        return $this;
    }

    /**
     * 根据图文上传时间进行过滤的起始时间，与end_time搭配使用。 格式：\&quot;yyyy-mm-dd HH:MM:SS\&quot;
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 根据图文上传时间进行过滤的结束时间，与start_time搭配使用。 格式：\&quot;yyyy-mm-dd HH:MM:SS\&quot;
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function order(\Oceanengine\Models\LocalFileCarouselListV30Order $order): self
    {
        $this->order = $order;
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
     * 素材库图文素材列表
     */
    public function execute(): \Oceanengine\Models\LocalFileCarouselListV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->keyword !== null) {
            $queryParams['keyword'] = $this->keyword;
        }
        if ($this->carouselIds !== null) {
            $queryParams['carousel_ids'] = $this->carouselIds;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->order !== null) {
            $__encoded0 = json_encode($this->order);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: order');
            }
            $queryParams['order'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/file/carousel/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalFileCarouselListV30Response::class);

        return $result['model'];
    }
}
