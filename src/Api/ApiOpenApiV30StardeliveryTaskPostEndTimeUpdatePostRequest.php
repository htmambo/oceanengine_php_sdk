<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_post_end_time_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新星广联投任务截止时间
 */
class ApiOpenApiV30StardeliveryTaskPostEndTimeUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StardeliveryTaskPostEndTimeUpdateV30Request $stardeliveryTaskPostEndTimeUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StardeliveryTaskPostEndTimeUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function stardeliveryTaskPostEndTimeUpdateV30Request(\Oceanengine\Models\StardeliveryTaskPostEndTimeUpdateV30Request $stardeliveryTaskPostEndTimeUpdateV30Request): self
    {
        $this->stardeliveryTaskPostEndTimeUpdateV30Request = $stardeliveryTaskPostEndTimeUpdateV30Request;
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
     * 更新星广联投任务截止时间
     */
    public function execute(): \Oceanengine\Models\StardeliveryTaskPostEndTimeUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->stardeliveryTaskPostEndTimeUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/stardelivery/task/post_end_time/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StardeliveryTaskPostEndTimeUpdateV30Response::class);

        return $result['model'];
    }
}
