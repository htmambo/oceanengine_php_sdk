<?php

/**
 * 本文件由 go2php 生成，源: api_star_attribute_jd_overflow_convert_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 外溢度量-京东回传转化数据
 */
class ApiOpenApi2StarAttributeJdOverflowConvertPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarAttributeJdOverflowConvertV2Request $starAttributeJdOverflowConvertV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarAttributeJdOverflowConvertV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starAttributeJdOverflowConvertV2Request(\Oceanengine\Models\StarAttributeJdOverflowConvertV2Request $starAttributeJdOverflowConvertV2Request): self
    {
        $this->starAttributeJdOverflowConvertV2Request = $starAttributeJdOverflowConvertV2Request;
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
     * 外溢度量-京东回传转化数据
     */
    public function execute(): \Oceanengine\Models\StarAttributeJdOverflowConvertV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starAttributeJdOverflowConvertV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/attribute/jd_overflow_convert/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarAttributeJdOverflowConvertV2Response::class);

        return $result['model'];
    }
}
