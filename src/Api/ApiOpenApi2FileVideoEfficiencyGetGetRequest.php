<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_efficiency_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持查询素材是否是低效素材，传入素材ID列表，返回低效素材列表。
 * 当前仅支持查询视频类型的素材。
 * 低效素材：根据素材与相似素材投放数据，系统预估该素材后续难以起量，建议暂停或更换素材
 */
class ApiOpenApi2FileVideoEfficiencyGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 广告主id */
    private ?string $advertiserId = null;
    /** @var string[] 素材列表，单次最多可查询100个 */
    private ?array $materialIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoEfficiencyGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(string $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材列表，单次最多可查询100个
     */
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
     * 支持查询素材是否是低效素材，传入素材ID列表，返回低效素材列表。
     */
    public function execute(): \Oceanengine\Models\FileVideoEfficiencyGetV2Response
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
        $url = '/open_api/2/file/video/efficiency/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoEfficiencyGetV2Response::class);

        return $result['model'];
    }
}
