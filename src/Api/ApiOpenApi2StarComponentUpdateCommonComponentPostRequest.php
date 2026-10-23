<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_update_common_component_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 提供通用的星图组件修改api
 */
class ApiOpenApi2StarComponentUpdateCommonComponentPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarComponentUpdateCommonComponentV2Request $starComponentUpdateCommonComponentV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarComponentUpdateCommonComponentV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starComponentUpdateCommonComponentV2Request(\Oceanengine\Models\StarComponentUpdateCommonComponentV2Request $starComponentUpdateCommonComponentV2Request): self
    {
        $this->starComponentUpdateCommonComponentV2Request = $starComponentUpdateCommonComponentV2Request;
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
     * 提供通用的星图组件修改api
     */
    public function execute(): \Oceanengine\Models\StarComponentUpdateCommonComponentV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starComponentUpdateCommonComponentV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/component/update_common_component/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarComponentUpdateCommonComponentV2Response::class);

        return $result['model'];
    }
}
