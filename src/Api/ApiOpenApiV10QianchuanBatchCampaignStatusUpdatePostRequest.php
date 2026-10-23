<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_batch_campaign_status_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 此接口用于更新当前千川广告账户下的广告组的状态。
 */
class ApiOpenApiV10QianchuanBatchCampaignStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanBatchCampaignStatusUpdateV10Request $qianchuanBatchCampaignStatusUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanBatchCampaignStatusUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanBatchCampaignStatusUpdateV10Request(\Oceanengine\Models\QianchuanBatchCampaignStatusUpdateV10Request $qianchuanBatchCampaignStatusUpdateV10Request): self
    {
        $this->qianchuanBatchCampaignStatusUpdateV10Request = $qianchuanBatchCampaignStatusUpdateV10Request;
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
     * 此接口用于更新当前千川广告账户下的广告组的状态。
     */
    public function execute(): \Oceanengine\Models\QianchuanBatchCampaignStatusUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanBatchCampaignStatusUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/batch_campaign_status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanBatchCampaignStatusUpdateV10Response::class);

        return $result['model'];
    }
}
