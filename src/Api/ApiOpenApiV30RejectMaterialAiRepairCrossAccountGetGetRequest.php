<?php

/**
 * 本文件由 go2php 生成，源: api_reject_material_ai_repair_cross_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据mid查询同主体账户下修复建议列表
 */
class ApiOpenApiV30RejectMaterialAiRepairCrossAccountGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var int 素材Id */
    private ?int $materialId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(RejectMaterialAiRepairCrossAccountGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材Id
     */
    public function materialId(int $materialId): self
    {
        $this->materialId = $materialId;
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
     * 根据mid查询同主体账户下修复建议列表
     */
    public function execute(): \Oceanengine\Models\RejectMaterialAiRepairCrossAccountGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->materialId === null) {
            throw new \InvalidArgumentException('materialId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['material_id'] = $this->materialId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/reject_material/ai_repair/cross_account/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\RejectMaterialAiRepairCrossAccountGetV30Response::class);

        return $result['model'];
    }
}
