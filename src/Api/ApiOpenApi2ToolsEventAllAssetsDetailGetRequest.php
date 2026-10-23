<?php

/**
 * 本文件由 go2php 生成，源: api_tools_event_all_assets_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 仅支持查询我创建的+共享中状态、未删除的资产详情，共享失败不支持查询
 */
class ApiOpenApi2ToolsEventAllAssetsDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 id */
    private ?int $advertiserId = null;
    /** @var int[] 资产id列表，list长度最长50，当账户下不存在该资产id时不会返回，当资产共享失效时，不会返回详情 */
    private ?array $assetIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsEventAllAssetsDetailV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主 id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 资产id列表，list长度最长50，当账户下不存在该资产id时不会返回，当资产共享失效时，不会返回详情
     */
    public function assetIds(array $assetIds): self
    {
        $this->assetIds = $assetIds;
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
     * 仅支持查询我创建的+共享中状态、未删除的资产详情，共享失败不支持查询
     */
    public function execute(): \Oceanengine\Models\ToolsEventAllAssetsDetailV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->assetIds === null) {
            throw new \InvalidArgumentException('assetIds is required and must be specified');
        }
        if (count($this->assetIds) < 1) {
            throw new \InvalidArgumentException('assetIds must have at least 1 elements');
        }
        if (count($this->assetIds) > 50) {
            throw new \InvalidArgumentException('assetIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['asset_ids'] = $this->assetIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/event/all_assets/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsEventAllAssetsDetailV2Response::class);

        return $result['model'];
    }
}
