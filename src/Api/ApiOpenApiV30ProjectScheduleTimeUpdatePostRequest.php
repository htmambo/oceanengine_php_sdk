<?php

/**
 * 本文件由 go2php 生成，源: api_project_schedule_time_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量更新项目投放时间
 */
class ApiOpenApiV30ProjectScheduleTimeUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ProjectScheduleTimeUpdateV30Request $projectScheduleTimeUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectScheduleTimeUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function projectScheduleTimeUpdateV30Request(\Oceanengine\Models\ProjectScheduleTimeUpdateV30Request $projectScheduleTimeUpdateV30Request): self
    {
        $this->projectScheduleTimeUpdateV30Request = $projectScheduleTimeUpdateV30Request;
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
     * 批量更新项目投放时间
     */
    public function execute(): \Oceanengine\Models\ProjectScheduleTimeUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->projectScheduleTimeUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/project/schedule_time/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectScheduleTimeUpdateV30Response::class);

        return $result['model'];
    }
}
