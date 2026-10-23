<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_cost_protect_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取任务成本保障状态
 */
class ApiOpenApiV30OcProjectToolsCostProtectStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $scheduleIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsCostProtectStatusGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function scheduleIds(array $scheduleIds): self
    {
        $this->scheduleIds = $scheduleIds;
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
     * 获取任务成本保障状态
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->scheduleIds !== null) {
            $queryParams['schedule_ids'] = $this->scheduleIds;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools/cost_protect_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsCostProtectStatusGetV30Response::class);

        return $result['model'];
    }
}
