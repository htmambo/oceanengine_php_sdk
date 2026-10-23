<?php

/**
 * 本文件由 go2php 生成，源: api_stardelivery_task_author_video_audit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 审核星广联投视频
 */
class ApiOpenApiV30StardeliveryTaskAuthorVideoAuditPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StardeliveryTaskAuthorVideoAuditV30Request $stardeliveryTaskAuthorVideoAuditV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StardeliveryTaskAuthorVideoAuditV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function stardeliveryTaskAuthorVideoAuditV30Request(\Oceanengine\Models\StardeliveryTaskAuthorVideoAuditV30Request $stardeliveryTaskAuthorVideoAuditV30Request): self
    {
        $this->stardeliveryTaskAuthorVideoAuditV30Request = $stardeliveryTaskAuthorVideoAuditV30Request;
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
     * 审核星广联投视频
     */
    public function execute(): \Oceanengine\Models\StardeliveryTaskAuthorVideoAuditV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->stardeliveryTaskAuthorVideoAuditV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/stardelivery/task_author_video/audit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StardeliveryTaskAuthorVideoAuditV30Response::class);

        return $result['model'];
    }
}
