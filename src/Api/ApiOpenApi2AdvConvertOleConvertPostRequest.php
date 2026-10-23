<?php

/**
 * 本文件由 go2php 生成，源: api_adv_convert_ole_convert_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 引流下单转化信息获取
 */
class ApiOpenApi2AdvConvertOleConvertPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdvConvertOleConvertV2Request $advConvertOleConvertV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvConvertOleConvertV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advConvertOleConvertV2Request(\Oceanengine\Models\AdvConvertOleConvertV2Request $advConvertOleConvertV2Request): self
    {
        $this->advConvertOleConvertV2Request = $advConvertOleConvertV2Request;
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
     * 引流下单转化信息获取
     */
    public function execute(): \Oceanengine\Models\AdvConvertOleConvertV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->advConvertOleConvertV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/adv_convert/ole/convert/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvConvertOleConvertV2Response::class);

        return $result['model'];
    }
}
