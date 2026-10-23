<?php

/**
 * 本文件由 go2php 生成，源: api_tools_extreme_material_limit_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询广告主近 30 天在关联组×二级行业、company_id×二级行业两维度的警告/限制通知、命中层级、限制周期
 */
class ApiOpenApiV30ToolsExtremeMaterialLimitGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 历史 records 查询起始日期，格式 yyyy-mm-dd，默认 t-29。 */
    private ?string $startDate = null;
    /** @var string 历史 records 查询截止日期，格式 yyyy-mm-dd，默认 t（今日）。 */
    private ?string $endDate = null;
    /** @var string 通知类型筛选，允许值：WARN 警告 / LIMIT 限制，不传返回全部。 */
    private ?string $notificationType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsExtremeMaterialLimitGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 历史 records 查询起始日期，格式 yyyy-mm-dd，默认 t-29。
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 历史 records 查询截止日期，格式 yyyy-mm-dd，默认 t（今日）。
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 通知类型筛选，允许值：WARN 警告 / LIMIT 限制，不传返回全部。
     */
    public function notificationType(string $notificationType): self
    {
        $this->notificationType = $notificationType;
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
     * 查询广告主近 30 天在关联组×二级行业、company_id×二级行业两维度的警告/限制通知、命中层级、限制周期
     */
    public function execute(): \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->startDate !== null) {
            $queryParams['start_date'] = $this->startDate;
        }
        if ($this->endDate !== null) {
            $queryParams['end_date'] = $this->endDate;
        }
        if ($this->notificationType !== null) {
            $queryParams['notification_type'] = $this->notificationType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/extreme_material_limit/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30Response::class);

        return $result['model'];
    }
}
