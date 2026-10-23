<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_compensate_history_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 针对智擎版标准项目/调控任务，透传近30天的保障历史列表
 */
class ApiOpenApiV30OcProjectToolsCompensateHistoryListGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $projectId = null;
    private ?int $scheduleId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectToolsCompensateHistoryListGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function projectId(int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    public function scheduleId(int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
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
     * 针对智擎版标准项目/调控任务，透传近30天的保障历史列表
     */
    public function execute(): \Oceanengine\Models\OcProjectToolsCompensateHistoryListGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->projectId !== null) {
            $queryParams['project_id'] = $this->projectId;
        }
        if ($this->scheduleId !== null) {
            $queryParams['schedule_id'] = $this->scheduleId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/tools/compensate_history_list/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectToolsCompensateHistoryListGetV30Response::class);

        return $result['model'];
    }
}
