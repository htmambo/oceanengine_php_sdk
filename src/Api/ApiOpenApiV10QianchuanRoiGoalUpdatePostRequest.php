<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_roi_goal_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新roi_goal
 */
class ApiOpenApiV10QianchuanRoiGoalUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanRoiGoalUpdateV10Request $qianchuanRoiGoalUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanRoiGoalUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanRoiGoalUpdateV10Request(\Oceanengine\Models\QianchuanRoiGoalUpdateV10Request $qianchuanRoiGoalUpdateV10Request): self
    {
        $this->qianchuanRoiGoalUpdateV10Request = $qianchuanRoiGoalUpdateV10Request;
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
     * 更新roi_goal
     */
    public function execute(): \Oceanengine\Models\QianchuanRoiGoalUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanRoiGoalUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/roi/goal/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanRoiGoalUpdateV10Response::class);

        return $result['model'];
    }
}
