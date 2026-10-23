<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_asset_v2_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 该接口主要查询汽车行业投放条件信息，根据新线索商品id查询投放条件列表
 */
class ApiOpenApi2DpaAssetV2ListPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaAssetV2ListV2Request $dpaAssetV2ListV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaAssetV2ListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaAssetV2ListV2Request(\Oceanengine\Models\DpaAssetV2ListV2Request $dpaAssetV2ListV2Request): self
    {
        $this->dpaAssetV2ListV2Request = $dpaAssetV2ListV2Request;
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
     * 该接口主要查询汽车行业投放条件信息，根据新线索商品id查询投放条件列表
     */
    public function execute(): \Oceanengine\Models\DpaAssetV2ListV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaAssetV2ListV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/asset_v2/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaAssetV2ListV2Response::class);

        return $result['model'];
    }
}
