<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_convert_window_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询字节小游戏归因激活时间窗
 */
class ApiOpenApiV30ToolsMicroGameConvertWindowGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?string $assetId = null;
    private ?string $assetType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMicroGameConvertWindowGetV30ApiService $service)
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
     * 查询字节小游戏归因激活时间窗
     */
    public function execute(): \Oceanengine\Models\ToolsMicroGameConvertWindowGetV30Response
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
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_id'] = $this->accountId;
        $queryParams['account_type'] = $this->accountType;
        $queryParams['asset_id'] = $this->assetId;
        $queryParams['asset_type'] = $this->assetType;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/micro_game/convert_window/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMicroGameConvertWindowGetV30Response::class);

        return $result['model'];
    }
}
