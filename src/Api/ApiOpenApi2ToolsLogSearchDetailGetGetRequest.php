<?php

/**
 * 本文件由 go2php 生成，源: api_tools_log_search_detail_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取操作日志详情
 */
class ApiOpenApi2ToolsLogSearchDetailGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $secondLogId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsLogSearchDetailGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function secondLogId(int $secondLogId): self
    {
        $this->secondLogId = $secondLogId;
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
     * 获取操作日志详情
     */
    public function execute(): \Oceanengine\Models\ToolsLogSearchDetailGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->secondLogId === null) {
            throw new \InvalidArgumentException('secondLogId is required and must be specified');
        }
        if ($this->secondLogId < 1) {
            throw new \InvalidArgumentException('secondLogId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['second_log_id'] = $this->secondLogId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/log_search/detail/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsLogSearchDetailGetV2Response::class);

        return $result['model'];
    }
}
