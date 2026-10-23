<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_get_contracted_challenge_url_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 机构承包-获取任务链接
 */
class ApiOpenApi2StarMcnGetContractedChallengeUrlGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $demandId = null;
    private ?string $channelId = null;
    private ?int $developerId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnGetContractedChallengeUrlV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function demandId(int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    public function channelId(string $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    public function developerId(int $developerId): self
    {
        $this->developerId = $developerId;
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
     * 机构承包-获取任务链接
     */
    public function execute(): \Oceanengine\Models\StarMcnGetContractedChallengeUrlV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->demandId === null) {
            throw new \InvalidArgumentException('demandId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['demand_id'] = $this->demandId;
        if ($this->channelId !== null) {
            $queryParams['channel_id'] = $this->channelId;
        }
        if ($this->developerId !== null) {
            $queryParams['developer_id'] = $this->developerId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/get_contracted_challenge_url/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnGetContractedChallengeUrlV2Response::class);

        return $result['model'];
    }
}
