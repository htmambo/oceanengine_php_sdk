<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 品牌广告组下单
 */
class ApiOpenApiV30BrandCampaignSubmitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandCampaignSubmitV30Request $brandCampaignSubmitV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCampaignSubmitV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandCampaignSubmitV30Request(\Oceanengine\Models\BrandCampaignSubmitV30Request $brandCampaignSubmitV30Request): self
    {
        $this->brandCampaignSubmitV30Request = $brandCampaignSubmitV30Request;
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
     * 品牌广告组下单
     */
    public function execute(): \Oceanengine\Models\BrandCampaignSubmitV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandCampaignSubmitV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/campaign/submit/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCampaignSubmitV30Response::class);

        return $result['model'];
    }
}
