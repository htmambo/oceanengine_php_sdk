<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_campaign_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建千川广告账户下的广告组
 */
class ApiOpenApiV10QianchuanCampaignCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanCampaignCreateV10Request $qianchuanCampaignCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanCampaignCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanCampaignCreateV10Request(\Oceanengine\Models\QianchuanCampaignCreateV10Request $qianchuanCampaignCreateV10Request): self
    {
        $this->qianchuanCampaignCreateV10Request = $qianchuanCampaignCreateV10Request;
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
     * 创建千川广告账户下的广告组
     */
    public function execute(): \Oceanengine\Models\QianchuanCampaignCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanCampaignCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/campaign/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanCampaignCreateV10Response::class);

        return $result['model'];
    }
}
