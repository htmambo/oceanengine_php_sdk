<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_handsel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以实现站点的转赠功能，将某一广告主的站点共享给其他特定的广告主，转赠成功后，广告主们拥有站点的共同使用权。 不限制主体，同广告主不能进行转赠操作
 */
class ApiOpenApi2ToolsSiteHandselPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $xOrangeCaller = null;
    private ?\Oceanengine\Models\ToolsSiteHandselV2Request $toolsSiteHandselV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteHandselV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
        return $this;
    }

    public function toolsSiteHandselV2Request(\Oceanengine\Models\ToolsSiteHandselV2Request $toolsSiteHandselV2Request): self
    {
        $this->toolsSiteHandselV2Request = $toolsSiteHandselV2Request;
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
     * 通过此接口，用户可以实现站点的转赠功能，将某一广告主的站点共享给其他特定的广告主，转赠成功后，广告主们拥有站点的共同使用权。 不限制主体，同广告主不能进行转赠操作
     */
    public function execute(): \Oceanengine\Models\ToolsSiteHandselV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->xOrangeCaller !== null) {
            $headers['X-Orange-Caller'] = $this->xOrangeCaller;
        }
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsSiteHandselV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site/handsel/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteHandselV2Response::class);

        return $result['model'];
    }
}
