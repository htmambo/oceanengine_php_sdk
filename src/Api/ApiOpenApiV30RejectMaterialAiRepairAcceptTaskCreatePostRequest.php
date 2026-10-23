<?php

/**
 * 本文件由 go2php 生成，源: api_reject_material_ai_repair_accept_task_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 采纳拒审素材修复建议
 */
class ApiOpenApiV30RejectMaterialAiRepairAcceptTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\RejectMaterialAiRepairAcceptTaskCreateV30Request $rejectMaterialAiRepairAcceptTaskCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(RejectMaterialAiRepairAcceptTaskCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function rejectMaterialAiRepairAcceptTaskCreateV30Request(\Oceanengine\Models\RejectMaterialAiRepairAcceptTaskCreateV30Request $rejectMaterialAiRepairAcceptTaskCreateV30Request): self
    {
        $this->rejectMaterialAiRepairAcceptTaskCreateV30Request = $rejectMaterialAiRepairAcceptTaskCreateV30Request;
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
     * 采纳拒审素材修复建议
     */
    public function execute(): \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->rejectMaterialAiRepairAcceptTaskCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/reject_material/ai_repair_accept_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskCreateV30Response::class);

        return $result['model'];
    }
}
