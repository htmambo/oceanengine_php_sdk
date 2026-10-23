<?php

/**
 * 本文件由 go2php 生成，源: api_file_carousel_aweme_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取创编可用的抖音图文素材
 */
class ApiOpenApiV30FileCarouselAwemeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 抖音号id */
    private ?string $awemeId = null;
    /** @var \Oceanengine\Models\FileCarouselAwemeGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\FileCarouselAwemeGetV30Filtering $filtering = null;
    /** @var string 页码游标值 */
    private ?string $cursor = null;
    /** @var int 页码游标值 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileCarouselAwemeGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 抖音号id
     */
    public function awemeId(string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\FileCarouselAwemeGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码游标值
     */
    public function cursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页码游标值
     */
    public function count(int $count): self
    {
        $this->count = $count;
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
     * 获取创编可用的抖音图文素材
     */
    public function execute(): \Oceanengine\Models\FileCarouselAwemeGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/file/carousel/aweme/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileCarouselAwemeGetV30Response::class);

        return $result['model'];
    }
}
