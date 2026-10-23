<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_contract_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 机构承包-传入任务分佣比例及接收任务
 */
class ApiOpenApi2StarMcnContractChallengePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarMcnContractChallengeV2Request $starMcnContractChallengeV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnContractChallengeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starMcnContractChallengeV2Request(\Oceanengine\Models\StarMcnContractChallengeV2Request $starMcnContractChallengeV2Request): self
    {
        $this->starMcnContractChallengeV2Request = $starMcnContractChallengeV2Request;
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
     * 机构承包-传入任务分佣比例及接收任务
     */
    public function execute(): \Oceanengine\Models\StarMcnContractChallengeV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starMcnContractChallengeV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/contract_challenge/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnContractChallengeV2Response::class);

        return $result['model'];
    }
}
