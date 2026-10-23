<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_submit_export_boost_item_group_data_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 发起导出投中加热组数据
 */
class ApiOpenApi2StarVasSubmitExportBoostItemGroupDataPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarVasSubmitExportBoostItemGroupDataV2Request $starVasSubmitExportBoostItemGroupDataV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarVasSubmitExportBoostItemGroupDataV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starVasSubmitExportBoostItemGroupDataV2Request(\Oceanengine\Models\StarVasSubmitExportBoostItemGroupDataV2Request $starVasSubmitExportBoostItemGroupDataV2Request): self
    {
        $this->starVasSubmitExportBoostItemGroupDataV2Request = $starVasSubmitExportBoostItemGroupDataV2Request;
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
     * 发起导出投中加热组数据
     */
    public function execute(): \Oceanengine\Models\StarVasSubmitExportBoostItemGroupDataV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starVasSubmitExportBoostItemGroupDataV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/vas/submit_export_boost_item_group_data/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarVasSubmitExportBoostItemGroupDataV2Response::class);

        return $result['model'];
    }
}
