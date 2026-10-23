<?php

/**
 * 本文件由 go2php 生成，源: api_security_non_score_disposal_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询非积分处置数据
 */
class ApiOpenApiV30SecurityNonScoreDisposalInfoGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 业务线枚举 */
    private ?string $businessLine = null;
    private ?\Oceanengine\Models\SecurityNonScoreDisposalInfoGetV30TimeRange $timeRange = null;
    private ?int $page = null;
    /** @var int 1-100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SecurityNonScoreDisposalInfoGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 业务线枚举
     */
    public function businessLine(string $businessLine): self
    {
        $this->businessLine = $businessLine;
        return $this;
    }

    public function timeRange(\Oceanengine\Models\SecurityNonScoreDisposalInfoGetV30TimeRange $timeRange): self
    {
        $this->timeRange = $timeRange;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 1-100
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 查询非积分处置数据
     */
    public function execute(): \Oceanengine\Models\SecurityNonScoreDisposalInfoGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->businessLine === null) {
            throw new \InvalidArgumentException('businessLine is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['business_line'] = $this->businessLine;
        if ($this->timeRange !== null) {
            $__encoded0 = json_encode($this->timeRange);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: timeRange');
            }
            $queryParams['time_range'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/security/non_score_disposal_info/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SecurityNonScoreDisposalInfoGetV30Response::class);

        return $result['model'];
    }
}
