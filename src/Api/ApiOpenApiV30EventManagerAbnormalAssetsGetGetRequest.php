<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_abnormal_assets_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 此接口用于查询事件管理异常的应用类资产信息
 */
class ApiOpenApiV30EventManagerAbnormalAssetsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 广告主ID */
    private ?string $advertiserId = null;
    /** @var \Oceanengine\Models\EventManagerAbnormalAssetsGetV30PageInfo 分页信息 */
    private ?\Oceanengine\Models\EventManagerAbnormalAssetsGetV30PageInfo $pageInfo = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EventManagerAbnormalAssetsGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(string $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 分页信息
     */
    public function pageInfo(\Oceanengine\Models\EventManagerAbnormalAssetsGetV30PageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
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
     * 此接口用于查询事件管理异常的应用类资产信息
     */
    public function execute(): \Oceanengine\Models\EventManagerAbnormalAssetsGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->pageInfo !== null) {
            $__encoded0 = json_encode($this->pageInfo);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageInfo');
            }
            $queryParams['page_info'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/event_manager/abnormal_assets/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EventManagerAbnormalAssetsGetV30Response::class);

        return $result['model'];
    }
}
