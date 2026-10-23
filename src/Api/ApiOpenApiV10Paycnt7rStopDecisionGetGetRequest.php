<?php

/**
 * 本文件由 go2php 生成，源: api_paycnt7r_stop_decision_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据广告主 ID（advertiser_id）和项目 ID（cdp_project_id），判断每付+7R项目是否命中暂停条件。
 * 按项目粒度查询北京时间最近60个完整分钟的数据。预估点击率 = SUM(ectr_sum) / SUM(send_cnt)，bagging_cvr_ori 按 AVG 聚合；当 0.005 ≤ 预估点击率 ≤ 0.03 且 0.0005 ≤ AVG(bagging_cvr_ori) ≤ 0.01 时，should_stop=true，否则为 false。
 * 接口只返回判断结果，不执行项目或广告关停。仅在 success=true 时 should_stop 有效；无数据、send_cnt 为0或下游查询失败时返回失败信息，不给出有效暂停结论。extra 用于返回指标、查询时间范围及判断原因等附加信息。
 */
class ApiOpenApiV10Paycnt7rStopDecisionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 ID，必填，正整数（int64）；用于广告主鉴权，项目须归属于该广告主。 */
    private ?int $advertiserId = null;
    /** @var int 每付+7R项目 ID（cdp_project_id），必填，正整数（int64），须属于 advertiser_id 指定的广告主。查询最近60个完整分钟，无额外延迟。 */
    private ?int $cdpProjectId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(Paycnt7rStopDecisionGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主 ID，必填，正整数（int64）；用于广告主鉴权，项目须归属于该广告主。
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 每付+7R项目 ID（cdp_project_id），必填，正整数（int64），须属于 advertiser_id 指定的广告主。查询最近60个完整分钟，无额外延迟。
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
     * 根据广告主 ID（advertiser_id）和项目 ID（cdp_project_id），判断每付+7R项目是否命中暂停条件。
     */
    public function execute(): \Oceanengine\Models\Paycnt7rStopDecisionGetV10Response
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
        $url = '/open_api/v1.0/paycnt_7r_stop_decision/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\Paycnt7rStopDecisionGetV10Response::class);

        return $result['model'];
    }
}
