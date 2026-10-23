<?php

/**
 * 本文件由 go2php 生成，源: api_open_material_audit_pro_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告素材预审提交接口（连山云视频点播版）
 */
class ApiOpenApiV30OpenMaterialAuditProSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\OpenMaterialAuditProSubmitV30Request $openMaterialAuditProSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OpenMaterialAuditProSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function openMaterialAuditProSubmitV30Request(\Oceanengine\Models\OpenMaterialAuditProSubmitV30Request $openMaterialAuditProSubmitV30Request): self
    {
        $this->openMaterialAuditProSubmitV30Request = $openMaterialAuditProSubmitV30Request;
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
     * 广告素材预审提交接口（连山云视频点播版）
     */
    public function execute(): \Oceanengine\Models\OpenMaterialAuditProSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->openMaterialAuditProSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/open_material_audit/pro/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OpenMaterialAuditProSubmitV30Response::class);

        return $result['model'];
    }
}
