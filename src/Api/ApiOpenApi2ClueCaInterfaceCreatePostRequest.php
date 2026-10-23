<?php

/**
 * 本文件由 go2php 生成，源: api_clue_ca_interface_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获客助手接口版创建
 */
class ApiOpenApi2ClueCaInterfaceCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ClueCaInterfaceCreateV2Request $clueCaInterfaceCreateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueCaInterfaceCreateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function clueCaInterfaceCreateV2Request(\Oceanengine\Models\ClueCaInterfaceCreateV2Request $clueCaInterfaceCreateV2Request): self
    {
        $this->clueCaInterfaceCreateV2Request = $clueCaInterfaceCreateV2Request;
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
     * 获客助手接口版创建
     */
    public function execute(): \Oceanengine\Models\ClueCaInterfaceCreateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->clueCaInterfaceCreateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/ca/interface/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueCaInterfaceCreateV2Response::class);

        return $result['model'];
    }
}
