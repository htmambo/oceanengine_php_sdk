<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_overall_marketing_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 全域计划升级为乘方计划
 */
class ApiOpenApiV10QianchuanAdOverallMarketingUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10Request $qianchuanAdOverallMarketingUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdOverallMarketingUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAdOverallMarketingUpdateV10Request(\Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10Request $qianchuanAdOverallMarketingUpdateV10Request): self
    {
        $this->qianchuanAdOverallMarketingUpdateV10Request = $qianchuanAdOverallMarketingUpdateV10Request;
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
     * 全域计划升级为乘方计划
     */
    public function execute(): \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAdOverallMarketingUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/overall_marketing/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdOverallMarketingUpdateV10Response::class);

        return $result['model'];
    }
}
