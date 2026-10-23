<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_std_project_tools_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持获取定向、关键词、素材 3类调控任务剩余可用quota
 */
class ApiOpenApiV30OcProjectStdProjectToolsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $projectIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(OcProjectStdProjectToolsGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

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
     * 支持获取定向、关键词、素材 3类调控任务剩余可用quota
     */
    public function execute(): \Oceanengine\Models\OcProjectStdProjectToolsGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->projectIds === null) {
            throw new \InvalidArgumentException('projectIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['project_ids'] = $this->projectIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/oc_project/std_project/tools/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\OcProjectStdProjectToolsGetV30Response::class);

        return $result['model'];
    }
}
