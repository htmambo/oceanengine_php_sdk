<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_get_contracted_challenge_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 机构承包-获取已参与任务列表
 */
class ApiOpenApi2StarMcnGetContractedChallengeListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    private ?int $page = null;
    private ?int $pageSize = null;
    private ?int $payType = null;
    private ?string $keyword = null;
    private ?int $componentType = null;
    private ?int $challengeStatus = null;
    private ?int $minCreateTimeStamp = null;
    private ?int $maxCreateTimeStamp = null;
    private ?int $developerId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarMcnGetContractedChallengeListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function payType(int $payType): self
    {
        $this->payType = $payType;
        return $this;
    }

    public function keyword(string $keyword): self
    {
        $this->keyword = $keyword;
        return $this;
    }

    public function componentType(int $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    public function challengeStatus(int $challengeStatus): self
    {
        $this->challengeStatus = $challengeStatus;
        return $this;
    }

    public function minCreateTimeStamp(int $minCreateTimeStamp): self
    {
        $this->minCreateTimeStamp = $minCreateTimeStamp;
        return $this;
    }

    public function maxCreateTimeStamp(int $maxCreateTimeStamp): self
    {
        $this->maxCreateTimeStamp = $maxCreateTimeStamp;
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
     * 机构承包-获取已参与任务列表
     */
    public function execute(): \Oceanengine\Models\StarMcnGetContractedChallengeListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->payType !== null) {
            $queryParams['pay_type'] = $this->payType;
        }
        if ($this->keyword !== null) {
            $queryParams['keyword'] = $this->keyword;
        }
        if ($this->componentType !== null) {
            $queryParams['component_type'] = $this->componentType;
        }
        if ($this->challengeStatus !== null) {
            $queryParams['challenge_status'] = $this->challengeStatus;
        }
        if ($this->minCreateTimeStamp !== null) {
            $queryParams['min_create_time_stamp'] = $this->minCreateTimeStamp;
        }
        if ($this->maxCreateTimeStamp !== null) {
            $queryParams['max_create_time_stamp'] = $this->maxCreateTimeStamp;
        }
        if ($this->developerId !== null) {
            $queryParams['developer_id'] = $this->developerId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/mcn/get_contracted_challenge_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarMcnGetContractedChallengeListV2Response::class);

        return $result['model'];
    }
}
