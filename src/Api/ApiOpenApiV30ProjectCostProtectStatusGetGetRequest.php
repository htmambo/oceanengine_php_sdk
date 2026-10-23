<?php

/**
 * 本文件由 go2php 生成，源: api_project_cost_protect_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持查询UBA项目层级成本保障状态（接口能力仅对齐AD）
 */
class ApiOpenApiV30ProjectCostProtectStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 巨量广告平台广告主id */
    private ?int $advertiserId = null;
    /** @var int[] 项目id列表，每次最多传入50个 */
    private ?array $projectIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectCostProtectStatusGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 巨量广告平台广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 项目id列表，每次最多传入50个
     */
    public function projectIds(array $projectIds): self
    {
        $this->projectIds = $projectIds;
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
     * 支持查询UBA项目层级成本保障状态（接口能力仅对齐AD）
     */
    public function execute(): \Oceanengine\Models\ProjectCostProtectStatusGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->projectIds === null) {
            throw new \InvalidArgumentException('projectIds is required and must be specified');
        }
        if (count($this->projectIds) < 1) {
            throw new \InvalidArgumentException('projectIds must have at least 1 elements');
        }
        if (count($this->projectIds) > 50) {
            throw new \InvalidArgumentException('projectIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['project_ids'] = $this->projectIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/project/cost_protect_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectCostProtectStatusGetV30Response::class);

        return $result['model'];
    }
}
