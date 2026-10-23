<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_pred_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * agent用于模型预估纠偏
 */
class ApiOpenApiV10UbaToolPredUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\UbaToolPredUpdateV10Request $ubaToolPredUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UbaToolPredUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ubaToolPredUpdateV10Request(\Oceanengine\Models\UbaToolPredUpdateV10Request $ubaToolPredUpdateV10Request): self
    {
        $this->ubaToolPredUpdateV10Request = $ubaToolPredUpdateV10Request;
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
     * agent用于模型预估纠偏
     */
    public function execute(): \Oceanengine\Models\UbaToolPredUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ubaToolPredUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/uba_tool/pred/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UbaToolPredUpdateV10Response::class);

        return $result['model'];
    }
}
