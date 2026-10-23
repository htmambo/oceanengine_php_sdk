<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_adv_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以通过传入视频id和投放设置(setting)创建对应的前测任务
 */
class ApiOpenApi2DiagnosisTaskAdvCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DiagnosisTaskAdvCreateV2Request $diagnosisTaskAdvCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DiagnosisTaskAdvCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function diagnosisTaskAdvCreateV2Request(\Oceanengine\Models\DiagnosisTaskAdvCreateV2Request $diagnosisTaskAdvCreateV2Request): self
    {
        $this->diagnosisTaskAdvCreateV2Request = $diagnosisTaskAdvCreateV2Request;
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
     * 通过此接口，用户可以通过传入视频id和投放设置(setting)创建对应的前测任务
     */
    public function execute(): \Oceanengine\Models\DiagnosisTaskAdvCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->diagnosisTaskAdvCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/diagnosis_task/adv/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DiagnosisTaskAdvCreateV2Response::class);

        return $result['model'];
    }
}
