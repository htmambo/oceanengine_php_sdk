<?php

/**
 * 本文件由 go2php 生成，源: api_file_incentive_policy_base_info_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 明点激励政策基础信息查询
 */
class ApiOpenApi2FileIncentivePolicyBaseInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $agentId = null;
    private ?int $year = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileIncentivePolicyBaseInfoGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    public function year(int $year): self
    {
        $this->year = $year;
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
     * 明点激励政策基础信息查询
     */
    public function execute(): \Oceanengine\Models\FileIncentivePolicyBaseInfoGetV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->year === null) {
            throw new \InvalidArgumentException('year is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['year'] = $this->year;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/incentive_policy_base_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileIncentivePolicyBaseInfoGetV2Response::class);

        return $result['model'];
    }
}
