<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_optional_targets_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询视频可投转化目标
 */
class ApiOpenApiV30DouplusOptionalTargetsListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $awemeSecUid = null;
    /** @var int 视频id */
    private ?int $itemId = null;
    /** @var string 直播间主播抖音id */
    private ?string $liveAwemeId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusOptionalTargetsListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function awemeSecUid(string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
        return $this;
    }

    /**
     * 视频id
     */
    public function itemId(int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 直播间主播抖音id
     */
    public function liveAwemeId(string $liveAwemeId): self
    {
        $this->liveAwemeId = $liveAwemeId;
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
     * 查询视频可投转化目标
     */
    public function execute(): \Oceanengine\Models\DouplusOptionalTargetsListV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->awemeSecUid !== null) {
            $queryParams['aweme_sec_uid'] = $this->awemeSecUid;
        }
        if ($this->itemId !== null) {
            $queryParams['item_id'] = $this->itemId;
        }
        if ($this->liveAwemeId !== null) {
            $queryParams['live_aweme_id'] = $this->liveAwemeId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/optional_targets/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusOptionalTargetsListV30Response::class);

        return $result['model'];
    }
}
