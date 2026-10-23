<?php

/**
 * 本文件由 go2php 生成，源: api_reject_material_ai_repair_accept_task_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取采纳素材修复建议任务结果
 */
class ApiOpenApiV30RejectMaterialAiRepairAcceptTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $aiRepairIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(RejectMaterialAiRepairAcceptTaskListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function aiRepairIds(array $aiRepairIds): self
    {
        $this->aiRepairIds = $aiRepairIds;
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
     * 获取采纳素材修复建议任务结果
     */
    public function execute(): \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->aiRepairIds === null) {
            throw new \InvalidArgumentException('aiRepairIds is required and must be specified');
        }
        if (count($this->aiRepairIds) < 1) {
            throw new \InvalidArgumentException('aiRepairIds must have at least 1 elements');
        }
        if (count($this->aiRepairIds) > 50) {
            throw new \InvalidArgumentException('aiRepairIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ai_repair_ids'] = $this->aiRepairIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/reject_material/ai_repair_accept_task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30Response::class);

        return $result['model'];
    }
}
