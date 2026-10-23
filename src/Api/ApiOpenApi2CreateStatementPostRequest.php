<?php

/**
 * 本文件由 go2php 生成，源: api_create_statement_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 结算单创建接口，负责代理的结算单创建
 */
class ApiOpenApi2CreateStatementPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CreateStatementV2Request $createStatementV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CreateStatementV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function createStatementV2Request(\Oceanengine\Models\CreateStatementV2Request $createStatementV2Request): self
    {
        $this->createStatementV2Request = $createStatementV2Request;
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
     * 结算单创建接口，负责代理的结算单创建
     */
    public function execute(): \Oceanengine\Models\CreateStatementV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->createStatementV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/create/statement/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CreateStatementV2Response::class);

        return $result['model'];
    }
}
