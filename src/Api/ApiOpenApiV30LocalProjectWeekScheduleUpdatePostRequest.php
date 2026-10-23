<?php

/**
 * 本文件由 go2php 生成，源: api_local_project_week_schedule_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 列表批量更新项目投放时段
 */
class ApiOpenApiV30LocalProjectWeekScheduleUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalProjectWeekScheduleUpdateV30Request $localProjectWeekScheduleUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalProjectWeekScheduleUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localProjectWeekScheduleUpdateV30Request(\Oceanengine\Models\LocalProjectWeekScheduleUpdateV30Request $localProjectWeekScheduleUpdateV30Request): self
    {
        $this->localProjectWeekScheduleUpdateV30Request = $localProjectWeekScheduleUpdateV30Request;
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
     * 列表批量更新项目投放时段
     */
    public function execute(): \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localProjectWeekScheduleUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/project/week_schedule/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalProjectWeekScheduleUpdateV30Response::class);

        return $result['model'];
    }
}
