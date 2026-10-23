<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_advertiser_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建离线拉取账户任务
 */
class ApiOpenApi2EbpAdvertiserTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\EbpAdvertiserTaskCreateV2Request $ebpAdvertiserTaskCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(EbpAdvertiserTaskCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ebpAdvertiserTaskCreateV2Request(\Oceanengine\Models\EbpAdvertiserTaskCreateV2Request $ebpAdvertiserTaskCreateV2Request): self
    {
        $this->ebpAdvertiserTaskCreateV2Request = $ebpAdvertiserTaskCreateV2Request;
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
     * 创建离线拉取账户任务
     */
    public function execute(): \Oceanengine\Models\EbpAdvertiserTaskCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ebpAdvertiserTaskCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ebp/advertiser/task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\EbpAdvertiserTaskCreateV2Response::class);

        return $result['model'];
    }
}
