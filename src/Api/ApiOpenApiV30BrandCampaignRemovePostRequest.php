<?php

/**
 * 本文件由 go2php 生成，源: api_brand_campaign_remove_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * AD品牌2.0删除广告组
 */
class ApiOpenApiV30BrandCampaignRemovePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\BrandCampaignRemoveV30Request $brandCampaignRemoveV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(BrandCampaignRemoveV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function brandCampaignRemoveV30Request(\Oceanengine\Models\BrandCampaignRemoveV30Request $brandCampaignRemoveV30Request): self
    {
        $this->brandCampaignRemoveV30Request = $brandCampaignRemoveV30Request;
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
     * AD品牌2.0删除广告组
     */
    public function execute(): \Oceanengine\Models\BrandCampaignRemoveV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->brandCampaignRemoveV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/brand/campaign/remove/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\BrandCampaignRemoveV30Response::class);

        return $result['model'];
    }
}
