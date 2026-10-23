<?php

/**
 * 本文件由 go2php 生成，源: api_tools_video_check_available_anchor_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsVideoCheckAvailableAnchorGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int[] 抖音视频ID */
    private ?array $itemIds = null;
    /** @var string 推广目的 */
    private ?string $landingType = null;
    /** @var string 转化目标 */
    private ?string $externalAction = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsVideoCheckAvailableAnchorV2ApiService $service)
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
     * 抖音视频ID
     */
    public function itemIds(array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * 推广目的
     */
    public function landingType(string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * 转化目标
     */
    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
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
    public function execute(): \Oceanengine\Models\ToolsVideoCheckAvailableAnchorV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->itemIds === null) {
            throw new \InvalidArgumentException('itemIds is required and must be specified');
        }
        if (count($this->itemIds) < 1) {
            throw new \InvalidArgumentException('itemIds must have at least 1 elements');
        }
        if (count($this->itemIds) > 100) {
            throw new \InvalidArgumentException('itemIds must have less than 100 elements');
        }
        if ($this->landingType === null) {
            throw new \InvalidArgumentException('landingType is required and must be specified');
        }
        if ($this->externalAction === null) {
            throw new \InvalidArgumentException('externalAction is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['item_ids'] = $this->itemIds;
        $queryParams['landing_type'] = $this->landingType;
        $queryParams['external_action'] = $this->externalAction;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/video/check_available_anchor/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsVideoCheckAvailableAnchorV2Response::class);

        return $result['model'];
    }
}
