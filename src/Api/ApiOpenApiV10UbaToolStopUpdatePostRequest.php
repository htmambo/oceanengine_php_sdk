<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_stop_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 项目计划关停
 */
class ApiOpenApiV10UbaToolStopUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\UbaToolStopUpdateV10Request $ubaToolStopUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UbaToolStopUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function ubaToolStopUpdateV10Request(\Oceanengine\Models\UbaToolStopUpdateV10Request $ubaToolStopUpdateV10Request): self
    {
        $this->ubaToolStopUpdateV10Request = $ubaToolStopUpdateV10Request;
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
     * 项目计划关停
     */
    public function execute(): \Oceanengine\Models\UbaToolStopUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->ubaToolStopUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/uba_tool/stop/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UbaToolStopUpdateV10Response::class);

        return $result['model'];
    }
}
