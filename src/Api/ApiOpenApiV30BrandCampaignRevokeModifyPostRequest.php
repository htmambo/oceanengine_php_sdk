<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_revoke_modify_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * AD品牌2.0广告组取消撤改
 */
class ApiOpenApiV30BrandCampaignRevokeModifyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandCampaignRevokeModifyV30Request $brandCampaignRevokeModifyV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCampaignRevokeModifyV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandCampaignRevokeModifyV30Request(\Oceanengine\Models\BrandCampaignRevokeModifyV30Request $brandCampaignRevokeModifyV30Request): self
    {
        $this->brandCampaignRevokeModifyV30Request = $brandCampaignRevokeModifyV30Request;
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
     * AD品牌2.0广告组取消撤改
     */
    public function execute(): \Oceanengine\Models\BrandCampaignRevokeModifyV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandCampaignRevokeModifyV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/campaign/revoke_modify/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCampaignRevokeModifyV30Response::class);

        return $result['model'];
    }
}
