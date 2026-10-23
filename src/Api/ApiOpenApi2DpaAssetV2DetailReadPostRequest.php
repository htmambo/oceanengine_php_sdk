<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_asset_v2_detail_read_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 该接口主要查询汽车行业投放条件信息，根据商品id查询投放条件详情
 */
class ApiOpenApi2DpaAssetV2DetailReadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaAssetV2DetailReadV2Request $dpaAssetV2DetailReadV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaAssetV2DetailReadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaAssetV2DetailReadV2Request(\Oceanengine\Models\DpaAssetV2DetailReadV2Request $dpaAssetV2DetailReadV2Request): self
    {
        $this->dpaAssetV2DetailReadV2Request = $dpaAssetV2DetailReadV2Request;
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
     * 该接口主要查询汽车行业投放条件信息，根据商品id查询投放条件详情
     */
    public function execute(): \Oceanengine\Models\DpaAssetV2DetailReadV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaAssetV2DetailReadV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/asset_v2/detail/read/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaAssetV2DetailReadV2Response::class);

        return $result['model'];
    }
}
