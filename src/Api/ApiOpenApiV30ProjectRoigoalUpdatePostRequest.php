<?php

/**
 * 本文件由 go2php 生成，源: api_project_roigoal_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创编2.0批量更新项目ROI系数
 */
class ApiOpenApiV30ProjectRoigoalUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ProjectRoigoalUpdateV30Request $projectRoigoalUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectRoigoalUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function projectRoigoalUpdateV30Request(\Oceanengine\Models\ProjectRoigoalUpdateV30Request $projectRoigoalUpdateV30Request): self
    {
        $this->projectRoigoalUpdateV30Request = $projectRoigoalUpdateV30Request;
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
     * 创编2.0批量更新项目ROI系数
     */
    public function execute(): \Oceanengine\Models\ProjectRoigoalUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->projectRoigoalUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/project/roigoal/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectRoigoalUpdateV30Response::class);

        return $result['model'];
    }
}
