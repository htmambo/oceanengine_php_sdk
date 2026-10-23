<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_share_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告主adv发起星图任务的共享，共享给其他adv
 */
class ApiOpenApiV30StardeliveryTaskSharePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StardeliveryTaskShareV30Request $stardeliveryTaskShareV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StardeliveryTaskShareV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function stardeliveryTaskShareV30Request(\Oceanengine\Models\StardeliveryTaskShareV30Request $stardeliveryTaskShareV30Request): self
    {
        $this->stardeliveryTaskShareV30Request = $stardeliveryTaskShareV30Request;
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
     * 广告主adv发起星图任务的共享，共享给其他adv
     */
    public function execute(): \Oceanengine\Models\StardeliveryTaskShareV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->stardeliveryTaskShareV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/stardelivery/task/share/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StardeliveryTaskShareV30Response::class);

        return $result['model'];
    }
}
