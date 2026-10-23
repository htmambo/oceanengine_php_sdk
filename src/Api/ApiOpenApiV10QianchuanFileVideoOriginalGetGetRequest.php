<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_file_video_original_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持查询素材是否是首发素材，传入素材ID列表，返回首发素材列表。
 */
class ApiOpenApiV10QianchuanFileVideoOriginalGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $advertiserId = null;
    private ?array $materialIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanFileVideoOriginalGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(string $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function materialIds(array $materialIds): self
    {
        $this->materialIds = $materialIds;
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
     * 支持查询素材是否是首发素材，传入素材ID列表，返回首发素材列表。
     */
    public function execute(): \Oceanengine\Models\QianchuanFileVideoOriginalGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->materialIds === null) {
            throw new \InvalidArgumentException('materialIds is required and must be specified');
        }
        if (count($this->materialIds) < 1) {
            throw new \InvalidArgumentException('materialIds must have at least 1 elements');
        }
        if (count($this->materialIds) > 100) {
            throw new \InvalidArgumentException('materialIds must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['material_ids'] = $this->materialIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/file/video/original/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanFileVideoOriginalGetV10Response::class);

        return $result['model'];
    }
}
