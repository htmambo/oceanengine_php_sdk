<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_modify_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 品牌广告组下单后发起撤改
 */
class ApiOpenApiV30BrandCampaignModifyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandCampaignModifyV30Request $brandCampaignModifyV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCampaignModifyV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandCampaignModifyV30Request(\Oceanengine\Models\BrandCampaignModifyV30Request $brandCampaignModifyV30Request): self
    {
        $this->brandCampaignModifyV30Request = $brandCampaignModifyV30Request;
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
     * 品牌广告组下单后发起撤改
     */
    public function execute(): \Oceanengine\Models\BrandCampaignModifyV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandCampaignModifyV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/campaign/modify/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCampaignModifyV30Response::class);

        return $result['model'];
    }
}
