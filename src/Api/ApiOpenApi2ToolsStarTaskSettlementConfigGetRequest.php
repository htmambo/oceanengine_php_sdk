<?php

/**
 * 本文件由 go2php 生成，源: api_tools_star_task_settlement_config_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询星广任务金额配置条件
 */
class ApiOpenApi2ToolsStarTaskSettlementConfigGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $advertiserId = null;
    /** @var int 一级行业id */
    private ?int $firstIndustryId = null;
    /** @var int 二级行业id */
    private ?int $secondIndustryId = null;
    /** @var int 素材一级类目id */
    private ?int $starMaterialFirstType = null;
    /** @var int 素材二级类目id */
    private ?int $starMaterialSecondType = null;
    /** @var string 优化目标，仅对达人流量生效。支持3种可选值） */
    private ?string $starTaskExternalAction = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsStarTaskSettlementConfigV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 一级行业id
     */
    public function firstIndustryId(int $firstIndustryId): self
    {
        $this->firstIndustryId = $firstIndustryId;
        return $this;
    }

    /**
     * 二级行业id
     */
    public function secondIndustryId(int $secondIndustryId): self
    {
        $this->secondIndustryId = $secondIndustryId;
        return $this;
    }

    /**
     * 素材一级类目id
     */
    public function starMaterialFirstType(int $starMaterialFirstType): self
    {
        $this->starMaterialFirstType = $starMaterialFirstType;
        return $this;
    }

    /**
     * 素材二级类目id
     */
    public function starMaterialSecondType(int $starMaterialSecondType): self
    {
        $this->starMaterialSecondType = $starMaterialSecondType;
        return $this;
    }

    /**
     * 优化目标，仅对达人流量生效。支持3种可选值）
     */
    public function starTaskExternalAction(string $starTaskExternalAction): self
    {
        $this->starTaskExternalAction = $starTaskExternalAction;
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
     * 查询星广任务金额配置条件
     */
    public function execute(): \Oceanengine\Models\ToolsStarTaskSettlementConfigV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->firstIndustryId === null) {
            throw new \InvalidArgumentException('firstIndustryId is required and must be specified');
        }
        if ($this->secondIndustryId === null) {
            throw new \InvalidArgumentException('secondIndustryId is required and must be specified');
        }
        if ($this->starMaterialFirstType === null) {
            throw new \InvalidArgumentException('starMaterialFirstType is required and must be specified');
        }
        if ($this->starMaterialSecondType === null) {
            throw new \InvalidArgumentException('starMaterialSecondType is required and must be specified');
        }
        if ($this->starTaskExternalAction === null) {
            throw new \InvalidArgumentException('starTaskExternalAction is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['first_industry_id'] = $this->firstIndustryId;
        $queryParams['second_industry_id'] = $this->secondIndustryId;
        $queryParams['star_material_first_type'] = $this->starMaterialFirstType;
        $queryParams['star_material_second_type'] = $this->starMaterialSecondType;
        $queryParams['star_task_external_action'] = $this->starTaskExternalAction;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/star_task/settlement_config/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsStarTaskSettlementConfigV2Response::class);

        return $result['model'];
    }
}
