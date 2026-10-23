<?php

/**
 * 本文件由 go2php 生成，源: api_clue_ca_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新获客助手链接
 */
class ApiOpenApi2ClueCaUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ClueCaUpdateV2Request $clueCaUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueCaUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function clueCaUpdateV2Request(\Oceanengine\Models\ClueCaUpdateV2Request $clueCaUpdateV2Request): self
    {
        $this->clueCaUpdateV2Request = $clueCaUpdateV2Request;
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
     * 更新获客助手链接
     */
    public function execute(): \Oceanengine\Models\ClueCaUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->clueCaUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/ca/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueCaUpdateV2Response::class);

        return $result['model'];
    }
}
