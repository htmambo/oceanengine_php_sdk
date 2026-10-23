<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 该接口用于获取广告主的飞鱼线索列表。
 */
class ApiOpenApi2ToolsClueGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $advertiserIds = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?array $clueIds = null;
    private ?bool $encryptSensitiveFields = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function clueIds(array $clueIds): self
    {
        $this->clueIds = $clueIds;
        return $this;
    }

    public function encryptSensitiveFields(bool $encryptSensitiveFields): self
    {
        $this->encryptSensitiveFields = $encryptSensitiveFields;
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
     * 该接口用于获取广告主的飞鱼线索列表。
     */
    public function execute(): \Oceanengine\Models\ToolsClueGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserIds !== null) {
            $queryParams['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->clueIds !== null) {
            $queryParams['clue_ids'] = $this->clueIds;
        }
        if ($this->encryptSensitiveFields !== null) {
            $queryParams['encrypt_sensitive_fields'] = $this->encryptSensitiveFields;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueGetV2Response::class);

        return $result['model'];
    }
}
