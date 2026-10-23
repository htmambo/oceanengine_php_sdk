<?php

/**
 * 本文件由 go2php 生成，源: api_going_global_roi_suggest_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询出海项目建议ROI
 */
class ApiOpenApiV30GoingGlobalRoiSuggestGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var float 国内 ROI 目标 */
    private ?float $roiGoal = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(GoingGlobalRoiSuggestGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 国内 ROI 目标
     */
    public function roiGoal(float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
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
     * 查询出海项目建议ROI
     */
    public function execute(): \Oceanengine\Models\GoingGlobalRoiSuggestGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->roiGoal === null) {
            throw new \InvalidArgumentException('roiGoal is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['roi_goal'] = $this->roiGoal;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/going_global_roi_suggest/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\GoingGlobalRoiSuggestGetV30Response::class);

        return $result['model'];
    }
}
