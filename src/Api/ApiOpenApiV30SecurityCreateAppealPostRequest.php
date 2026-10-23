<?php

/**
 * 本文件由 go2php 生成，源: api_security_create_appeal_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持电商平台投放字节广告的商家在电商后投放后台对审核拒绝的广告发起申诉
 */
class ApiOpenApiV30SecurityCreateAppealPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\SecurityCreateAppealV30Request $securityCreateAppealV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SecurityCreateAppealV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function securityCreateAppealV30Request(\Oceanengine\Models\SecurityCreateAppealV30Request $securityCreateAppealV30Request): self
    {
        $this->securityCreateAppealV30Request = $securityCreateAppealV30Request;
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
     * 支持电商平台投放字节广告的商家在电商后投放后台对审核拒绝的广告发起申诉
     */
    public function execute(): \Oceanengine\Models\SecurityCreateAppealV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->securityCreateAppealV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/security/create_appeal/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SecurityCreateAppealV30Response::class);

        return $result['model'];
    }
}
