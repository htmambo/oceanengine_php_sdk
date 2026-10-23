<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_unshare_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 取消广告主adv发起的星广联投任务共享
 */
class ApiOpenApiV30StardeliveryTaskUnsharePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StardeliveryTaskUnshareV30Request $stardeliveryTaskUnshareV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StardeliveryTaskUnshareV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function stardeliveryTaskUnshareV30Request(\Oceanengine\Models\StardeliveryTaskUnshareV30Request $stardeliveryTaskUnshareV30Request): self
    {
        $this->stardeliveryTaskUnshareV30Request = $stardeliveryTaskUnshareV30Request;
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
     * 取消广告主adv发起的星广联投任务共享
     */
    public function execute(): \Oceanengine\Models\StardeliveryTaskUnshareV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->stardeliveryTaskUnshareV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/stardelivery/task/unshare/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StardeliveryTaskUnshareV30Response::class);

        return $result['model'];
    }
}
