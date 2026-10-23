<?php

/**
 * 本文件由 go2php 生成，源: api_clue_ca_interface_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获客助手接口版更新
 */
class ApiOpenApi2ClueCaInterfaceUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ClueCaInterfaceUpdateV2Request $clueCaInterfaceUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueCaInterfaceUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function clueCaInterfaceUpdateV2Request(\Oceanengine\Models\ClueCaInterfaceUpdateV2Request $clueCaInterfaceUpdateV2Request): self
    {
        $this->clueCaInterfaceUpdateV2Request = $clueCaInterfaceUpdateV2Request;
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
     * 获客助手接口版更新
     */
    public function execute(): \Oceanengine\Models\ClueCaInterfaceUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->clueCaInterfaceUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/ca/interface/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueCaInterfaceUpdateV2Response::class);

        return $result['model'];
    }
}
