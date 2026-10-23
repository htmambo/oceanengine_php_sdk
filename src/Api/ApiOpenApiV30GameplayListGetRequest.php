<?php

/**
 * 本文件由 go2php 生成，源: api_gameplay_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持通过账户id和资产id，获取资产的玩法列表，资产范围：安卓游戏、抖音小游戏、微信小游戏
 */
class ApiOpenApiV30GameplayListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?string $assetId = null;
    private ?string $assetType = null;
    private ?\Oceanengine\Models\GameplayListV30PageInfo $pageInfo = null;
    private ?array $filterPlayNames = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(GameplayListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function assetId(string $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    public function assetType(string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    public function pageInfo(\Oceanengine\Models\GameplayListV30PageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    public function filterPlayNames(array $filterPlayNames): self
    {
        $this->filterPlayNames = $filterPlayNames;
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
     * 支持通过账户id和资产id，获取资产的玩法列表，资产范围：安卓游戏、抖音小游戏、微信小游戏
     */
    public function execute(): \Oceanengine\Models\GameplayListV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->assetId === null) {
            throw new \InvalidArgumentException('assetId is required and must be specified');
        }
        if ($this->assetType === null) {
            throw new \InvalidArgumentException('assetType is required and must be specified');
        }
        if ($this->pageInfo === null) {
            throw new \InvalidArgumentException('pageInfo is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['asset_id'] = $this->assetId;
        $queryParams['asset_type'] = $this->assetType;
        if ($this->filterPlayNames !== null) {
            $queryParams['filter_play_names'] = $this->filterPlayNames;
        }
        $__encoded0 = json_encode($this->pageInfo);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageInfo');
            }
            $queryParams['page_info'] = $__encoded0;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/gameplay/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\GameplayListV30Response::class);

        return $result['model'];
    }
}
