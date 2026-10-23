<?php

/**
 * 本文件由 go2php 生成，源: api_ad_convert_signal_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 全域增效API，对客介绍文档：https://bytedance.larkoffice.com/docx/QMhsdxN8Tou1c1xvvbUc1V01nGb
 */
class ApiOpenApi2AdConvertSignalPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdConvertSignalV2Request $adConvertSignalV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdConvertSignalV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function adConvertSignalV2Request(\Oceanengine\Models\AdConvertSignalV2Request $adConvertSignalV2Request): self
    {
        $this->adConvertSignalV2Request = $adConvertSignalV2Request;
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
     * 全域增效API，对客介绍文档：https://bytedance.larkoffice.com/docx/QMhsdxN8Tou1c1xvvbUc1V01nGb
     */
    public function execute(): string
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->adConvertSignalV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/ad_convert/signal/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $requestContext['responseType'] = 'binary';
        $result = $this->apiClient->call($requestContext, \Oceanengine\Api\BinaryResponse::class);

        return $result['model'];
    }
}
