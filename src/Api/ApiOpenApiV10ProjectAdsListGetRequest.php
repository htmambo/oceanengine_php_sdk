<?php

/**
 * 本文件由 go2php 生成，源: api_project_ads_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * ListProjectAds：传入 advertiser_id 和 cdp_project_id，只读查询项目下全部有效的底层 ad_id。排除已删除项目/计划、已删除自动广告和预览广告，不按广告启停状态过滤。所有 CDP 批次成功后返回去重、升序的 ad_ids；空项目成功返回 []，查询失败不返回部分列表。extra 返回 query_complete、ad_count、promotion_count 和查询口径。不调用 Debug 漏斗、创编、纠偏或关停。
 */
class ApiOpenApiV10ProjectAdsListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 ID，必须与项目归属一致 */
    private ?int $advertiserId = null;
    /** @var int CDP 项目 ID，按项目查询全部未删除、非预览广告，包含已暂停广告 */
    private ?int $cdpProjectId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectAdsListV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主 ID，必须与项目归属一致
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * CDP 项目 ID，按项目查询全部未删除、非预览广告，包含已暂停广告
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
     * ListProjectAds：传入 advertiser_id 和 cdp_project_id，只读查询项目下全部有效的底层 ad_id。排除已删除项目/计划、已删除自动广告和预览广告，不按广告启停状态过滤。所有 CDP 批次成功后返回去重、升序的 ad_ids；空项目成功返回 []，查询失败不返回部分列表。extra 返回 query_complete、ad_count、promotion_count 和查询口径。不调用 Debug 漏斗、创编、纠偏或关停。
     */
    public function execute(): \Oceanengine\Models\ProjectAdsListV10Response
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
        $url = '/open_api/v1.0/project_ads/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectAdsListV10Response::class);

        return $result['model'];
    }
}
