<?php

/**
 * 本文件由 go2php 生成，源: api_file_ebp_video_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取账户可用的组织视频列表
 */
class ApiOpenApiV30FileEbpVideoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 账户ID */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\FileEbpVideoGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\FileEbpVideoGetV30Filtering $filtering = null;
    /** @var int 页数 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileEbpVideoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\FileEbpVideoGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页数
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
     * 获取账户可用的组织视频列表
     */
    public function execute(): \Oceanengine\Models\FileEbpVideoGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
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
        $url = '/open_api/v3.0/file/ebp_video/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileEbpVideoGetV30Response::class);

        return $result['model'];
    }
}
