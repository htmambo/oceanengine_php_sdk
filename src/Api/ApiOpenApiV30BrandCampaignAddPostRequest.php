<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_add_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 品牌2.0创建广告组
 */
class ApiOpenApiV30BrandCampaignAddPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandCampaignAddV30Request $brandCampaignAddV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCampaignAddV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandCampaignAddV30Request(\Oceanengine\Models\BrandCampaignAddV30Request $brandCampaignAddV30Request): self
    {
        $this->brandCampaignAddV30Request = $brandCampaignAddV30Request;
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
     * 品牌2.0创建广告组
     */
    public function execute(): \Oceanengine\Models\BrandCampaignAddV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandCampaignAddV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/campaign/add/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCampaignAddV30Response::class);

        return $result['model'];
    }
}
