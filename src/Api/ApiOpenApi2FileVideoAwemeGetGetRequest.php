<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_aweme_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2FileVideoAwemeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 抖音号 */
    private ?string $awemeId = null;
    private ?\Oceanengine\Models\FileVideoAwemeGetV2Filtering $filtering = null;
    /** @var int 深分页页码，从1开始 */
    private ?int $page = null;
    /** @var int 深分页每页查询大小 */
    private ?int $pageSize = null;
    /** @var string 游标参数，初始值为0，当该字段不为空时，将以游标查询为准 */
    private ?string $cursor = null;
    /** @var int 游标查询每页查询大小 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoAwemeGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 抖音号
     */
    public function awemeId(string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function filtering(\Oceanengine\Models\FileVideoAwemeGetV2Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 深分页页码，从1开始
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 深分页每页查询大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 游标参数，初始值为0，当该字段不为空时，将以游标查询为准
     */
    public function cursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 游标查询每页查询大小
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\FileVideoAwemeGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
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
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/video/aweme/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoAwemeGetV2Response::class);

        return $result['model'];
    }
}
