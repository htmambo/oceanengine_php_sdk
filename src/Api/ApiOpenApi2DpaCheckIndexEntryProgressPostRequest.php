<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_check_index_entry_progress_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于查询xml的录入是否完成
 */
class ApiOpenApi2DpaCheckIndexEntryProgressPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DpaCheckIndexEntryProgressV2Request $dpaCheckIndexEntryProgressV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DpaCheckIndexEntryProgressV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function dpaCheckIndexEntryProgressV2Request(\Oceanengine\Models\DpaCheckIndexEntryProgressV2Request $dpaCheckIndexEntryProgressV2Request): self
    {
        $this->dpaCheckIndexEntryProgressV2Request = $dpaCheckIndexEntryProgressV2Request;
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
     * 用于查询xml的录入是否完成
     */
    public function execute(): \Oceanengine\Models\DpaCheckIndexEntryProgressV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->dpaCheckIndexEntryProgressV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/dpa/check_index_entry_progress/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DpaCheckIndexEntryProgressV2Response::class);

        return $result['model'];
    }
}
