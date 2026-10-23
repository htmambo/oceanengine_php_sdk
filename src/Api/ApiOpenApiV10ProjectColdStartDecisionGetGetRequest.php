<?php

/**
 * 本文件由 go2php 生成，源: api_project_cold_start_decision_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据广告主 ID（advertiser_id）和项目 ID（cdp_project_id），判断项目是否通过冷启动。
 * 按项目粒度汇总查询窗口内的 adv_value（ADVV）；SUM(adv_value) 严格大于400时 passed=true，否则为 false。查询起点取项目创建分钟与北京时间7天前零点的较晚值，终点为当前完整分钟，不增加延迟。
 * 接口仅返回查询与判断结果，不执行投放变更。仅在 success=true 时 passed 有效。extra 返回累计 ADVV、查询时间范围、阈值、判断原因和 history_truncated 标记；历史被截断时，passed=false 仅表示查询窗口内未超过阈值，不能据此判断窗口外的历史。
 */
class ApiOpenApiV10ProjectColdStartDecisionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 ID，必填，正整数（int64）；项目须归属于该广告主。 */
    private ?int $advertiserId = null;
    /** @var int 项目 ID，必填，正整数（int64），须属于 advertiser_id 指定的广告主。 */
    private ?int $cdpProjectId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectColdStartDecisionGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主 ID，必填，正整数（int64）；项目须归属于该广告主。
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 项目 ID，必填，正整数（int64），须属于 advertiser_id 指定的广告主。
     */
    public function cdpProjectId(int $cdpProjectId): self
    {
        $this->cdpProjectId = $cdpProjectId;
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
     * 根据广告主 ID（advertiser_id）和项目 ID（cdp_project_id），判断项目是否通过冷启动。
     */
    public function execute(): \Oceanengine\Models\ProjectColdStartDecisionGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->cdpProjectId === null) {
            throw new \InvalidArgumentException('cdpProjectId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['cdp_project_id'] = $this->cdpProjectId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/project_cold_start_decision/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectColdStartDecisionGetV10Response::class);

        return $result['model'];
    }
}
