<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_get_demand_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 小程序查询任务列表
 */
class ApiOpenApi2StarDemandOmGetDemandListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图ID */
    private ?int $starId = null;
    /** @var int page */
    private ?int $pageNo = null;
    /** @var int limit */
    private ?int $pageSize = null;
    /** @var int 任务开始时间 */
    private ?int $createStartTime = null;
    /** @var int 任务结束时间 */
    private ?int $createEndTime = null;
    /** @var \Oceanengine\Models\StarDemandOmGetDemandListV2UniversalSettlementType 结算方式 枚举，付费分佣、广告分成 */
    private ?\Oceanengine\Models\StarDemandOmGetDemandListV2UniversalSettlementType $universalSettlementType = null;
    /** @var string 小程序ID */
    private ?string $microAppId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemandOmGetDemandListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户星图ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * page
     */
    public function pageNo(int $pageNo): self
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * limit
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 任务开始时间
     */
    public function createStartTime(int $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 任务结束时间
     */
    public function createEndTime(int $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 结算方式 枚举，付费分佣、广告分成
     */
    public function universalSettlementType(\Oceanengine\Models\StarDemandOmGetDemandListV2UniversalSettlementType $universalSettlementType): self
    {
        $this->universalSettlementType = $universalSettlementType;
        return $this;
    }

    /**
     * 小程序ID
     */
    public function microAppId(string $microAppId): self
    {
        $this->microAppId = $microAppId;
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
     * 小程序查询任务列表
     */
    public function execute(): \Oceanengine\Models\StarDemandOmGetDemandListV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->pageNo === null) {
            throw new \InvalidArgumentException('pageNo is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        if ($this->createStartTime === null) {
            throw new \InvalidArgumentException('createStartTime is required and must be specified');
        }
        if ($this->createEndTime === null) {
            throw new \InvalidArgumentException('createEndTime is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->universalSettlementType !== null) {
            $__encoded0 = json_encode($this->universalSettlementType);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: universalSettlementType');
            }
            $queryParams['universal_settlement_type'] = $__encoded0;
        }
        $queryParams['page_no'] = $this->pageNo;
        $queryParams['page_size'] = $this->pageSize;
        if ($this->microAppId !== null) {
            $queryParams['micro_app_id'] = $this->microAppId;
        }
        $queryParams['create_start_time'] = $this->createStartTime;
        $queryParams['create_end_time'] = $this->createEndTime;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demand/om_get_demand_list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemandOmGetDemandListV2Response::class);

        return $result['model'];
    }
}
