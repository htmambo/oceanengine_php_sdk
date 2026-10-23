<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_get_info_tmp_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取账户/组RTA策略设置-内部使用
 */
class ApiOpenApi2ToolsRtaGetInfoTmpGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $advertiserId = null;
    /** @var int 广告组id，若传入，则拉取的是组维度的RTA策略 */
    private ?int $campaignId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsRtaGetInfoTmpV2ApiService $service)
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
     * 广告组id，若传入，则拉取的是组维度的RTA策略
     */
    public function campaignId(int $campaignId): self
    {
        $this->campaignId = $campaignId;
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
     * 获取账户/组RTA策略设置-内部使用
     */
    public function execute(): \Oceanengine\Models\ToolsRtaGetInfoTmpV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->campaignId !== null) {
            $queryParams['campaign_id'] = $this->campaignId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/rta/get_info_tmp/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsRtaGetInfoTmpV2Response::class);

        return $result['model'];
    }
}
