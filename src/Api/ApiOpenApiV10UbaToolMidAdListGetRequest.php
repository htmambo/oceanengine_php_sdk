<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_mid_ad_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 项目下素材计划查询
 */
class ApiOpenApiV10UbaToolMidAdListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 项目id */
    private ?int $cdpProjectId = null;
    /** @var int[] 查询的project下对应的lego_mid的计划 */
    private ?array $legoMidList = null;
    /** @var int 广告主id */
    private ?int $advertiserId = null;
    private ?string $reason = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UbaToolMidAdListV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 项目id
     */
    public function cdpProjectId(int $cdpProjectId): self
    {
        $this->cdpProjectId = $cdpProjectId;
        return $this;
    }

    /**
     * 查询的project下对应的lego_mid的计划
     */
    public function legoMidList(array $legoMidList): self
    {
        $this->legoMidList = $legoMidList;
        return $this;
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function reason(string $reason): self
    {
        $this->reason = $reason;
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
     * 项目下素材计划查询
     */
    public function execute(): \Oceanengine\Models\UbaToolMidAdListV10Response
    {
        if ($this->cdpProjectId === null) {
            throw new \InvalidArgumentException('cdpProjectId is required and must be specified');
        }
        if ($this->legoMidList === null) {
            throw new \InvalidArgumentException('legoMidList is required and must be specified');
        }
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['cdp_project_id'] = $this->cdpProjectId;
        $queryParams['lego_mid_list'] = $this->legoMidList;
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->reason !== null) {
            $queryParams['reason'] = $this->reason;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/uba_tool/mid_ad/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UbaToolMidAdListV10Response::class);

        return $result['model'];
    }
}
