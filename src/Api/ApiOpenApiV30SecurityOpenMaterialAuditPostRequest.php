<?php

/**
 * 本文件由 go2php 生成，源: api_security_open_material_audit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 与大盘素材使用相同规则进行素材预审
 */
class ApiOpenApiV30SecurityOpenMaterialAuditPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\SecurityOpenMaterialAuditV30Request $securityOpenMaterialAuditV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SecurityOpenMaterialAuditV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function securityOpenMaterialAuditV30Request(\Oceanengine\Models\SecurityOpenMaterialAuditV30Request $securityOpenMaterialAuditV30Request): self
    {
        $this->securityOpenMaterialAuditV30Request = $securityOpenMaterialAuditV30Request;
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
     * 与大盘素材使用相同规则进行素材预审
     */
    public function execute(): \Oceanengine\Models\SecurityOpenMaterialAuditV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->securityOpenMaterialAuditV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/security/open_material_audit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SecurityOpenMaterialAuditV30Response::class);

        return $result['model'];
    }
}
