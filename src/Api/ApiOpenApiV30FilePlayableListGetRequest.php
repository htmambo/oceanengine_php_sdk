<?php

/**
 * 本文件由 go2php 生成，源: api_file_playable_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 直玩、试玩列表
 */
class ApiOpenApiV30FilePlayableListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 素材类型 */
    private ?string $materialType = null;
    /** @var \Oceanengine\Models\FilePlayableListV30Filtering 可选过滤参数 */
    private ?\Oceanengine\Models\FilePlayableListV30Filtering $filtering = null;
    /** @var int 分页大小（&lt;&#x3D;0为未定义行为） */
    private ?int $pageSize = null;
    /** @var int 页码 */
    private ?int $page = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FilePlayableListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材类型
     */
    public function materialType(string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * 可选过滤参数
     */
    public function filtering(\Oceanengine\Models\FilePlayableListV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 分页大小（&lt;&#x3D;0为未定义行为）
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 直玩、试玩列表
     */
    public function execute(): \Oceanengine\Models\FilePlayableListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->materialType === null) {
            throw new \InvalidArgumentException('materialType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['material_type'] = $this->materialType;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/file/playable/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FilePlayableListV30Response::class);

        return $result['model'];
    }
}
