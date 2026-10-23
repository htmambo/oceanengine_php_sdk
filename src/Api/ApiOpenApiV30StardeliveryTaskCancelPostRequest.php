<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_cancel_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 取消星广联投任务
 */
class ApiOpenApiV30StardeliveryTaskCancelPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StardeliveryTaskCancelV30Request $stardeliveryTaskCancelV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StardeliveryTaskCancelV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function stardeliveryTaskCancelV30Request(\Oceanengine\Models\StardeliveryTaskCancelV30Request $stardeliveryTaskCancelV30Request): self
    {
        $this->stardeliveryTaskCancelV30Request = $stardeliveryTaskCancelV30Request;
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
     * 取消星广联投任务
     */
    public function execute(): \Oceanengine\Models\StardeliveryTaskCancelV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->stardeliveryTaskCancelV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/stardelivery/task/cancel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StardeliveryTaskCancelV30Response::class);

        return $result['model'];
    }
}
