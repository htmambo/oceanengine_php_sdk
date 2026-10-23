<?php

/**
 * 本文件由 go2php 生成，源: api_tools_privative_word_campaign_add_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsPrivativeWordCampaignAddPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2Request $toolsPrivativeWordCampaignAddV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPrivativeWordCampaignAddV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPrivativeWordCampaignAddV2Request(\Oceanengine\Models\ToolsPrivativeWordCampaignAddV2Request $toolsPrivativeWordCampaignAddV2Request): self
    {
        $this->toolsPrivativeWordCampaignAddV2Request = $toolsPrivativeWordCampaignAddV2Request;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPrivativeWordCampaignAddV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/privative_word/campaign/add/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2Response::class);

        return $result['model'];
    }
}
