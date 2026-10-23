<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_update_link_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 常规组件修改
 */
class ApiOpenApi2StarComponentUpdateLinkPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\StarComponentUpdateLinkV2Request $starComponentUpdateLinkV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarComponentUpdateLinkV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starComponentUpdateLinkV2Request(\Oceanengine\Models\StarComponentUpdateLinkV2Request $starComponentUpdateLinkV2Request): self
    {
        $this->starComponentUpdateLinkV2Request = $starComponentUpdateLinkV2Request;
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
     * 常规组件修改
     */
    public function execute(): \Oceanengine\Models\StarComponentUpdateLinkV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->starComponentUpdateLinkV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/component/update_link/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarComponentUpdateLinkV2Response::class);

        return $result['model'];
    }
}
