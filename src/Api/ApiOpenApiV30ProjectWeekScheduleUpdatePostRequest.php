<?php

/**
 * 本文件由 go2php 生成，源: api_project_week_schedule_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量更新项目投放时段
 */
class ApiOpenApiV30ProjectWeekScheduleUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ProjectWeekScheduleUpdateV30Request $projectWeekScheduleUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectWeekScheduleUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function projectWeekScheduleUpdateV30Request(\Oceanengine\Models\ProjectWeekScheduleUpdateV30Request $projectWeekScheduleUpdateV30Request): self
    {
        $this->projectWeekScheduleUpdateV30Request = $projectWeekScheduleUpdateV30Request;
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
     * 批量更新项目投放时段
     */
    public function execute(): \Oceanengine\Models\ProjectWeekScheduleUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->projectWeekScheduleUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/project/week_schedule/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectWeekScheduleUpdateV30Response::class);

        return $result['model'];
    }
}
