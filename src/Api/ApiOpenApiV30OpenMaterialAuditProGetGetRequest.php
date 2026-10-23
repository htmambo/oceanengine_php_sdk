<?php

/**
 * 本文件由 go2php 生成，源: api_open_material_audit_pro_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告素材预审结果查询（连山云视频点播版）
 */
class ApiOpenApiV30OpenMaterialAuditProGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 任务执行ID */
    private ?string $runId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OpenMaterialAuditProGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 任务执行ID
     */
    public function runId(string $runId): self
    {
        $this->runId = $runId;
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
     * 广告素材预审结果查询（连山云视频点播版）
     */
    public function execute(): \Oceanengine\Models\OpenMaterialAuditProGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->runId === null) {
            throw new \InvalidArgumentException('runId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['run_id'] = $this->runId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/open_material_audit/pro/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OpenMaterialAuditProGetV30Response::class);

        return $result['model'];
    }
}
