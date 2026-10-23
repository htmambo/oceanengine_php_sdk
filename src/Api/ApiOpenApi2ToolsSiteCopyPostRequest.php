<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_copy_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以实现站点的复制功能，成功后生成一个新站点id，站点内容和原站点一致。 注意
 * 用户在传入请求参数site_ids站点id列表时，需确保id的正确性，存在错误将导致复制全部失败！
 */
class ApiOpenApi2ToolsSiteCopyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $xOrangeCaller = null;
    private ?\Oceanengine\Models\ToolsSiteCopyV2Request $toolsSiteCopyV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsSiteCopyV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function xOrangeCaller(string $xOrangeCaller): self
    {
        $this->xOrangeCaller = $xOrangeCaller;
        return $this;
    }

    public function toolsSiteCopyV2Request(\Oceanengine\Models\ToolsSiteCopyV2Request $toolsSiteCopyV2Request): self
    {
        $this->toolsSiteCopyV2Request = $toolsSiteCopyV2Request;
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
     * 通过此接口，用户可以实现站点的复制功能，成功后生成一个新站点id，站点内容和原站点一致。 注意
     */
    public function execute(): \Oceanengine\Models\ToolsSiteCopyV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->xOrangeCaller !== null) {
            $headers['X-Orange-Caller'] = $this->xOrangeCaller;
        }
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsSiteCopyV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/site/copy/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsSiteCopyV2Response::class);

        return $result['model'];
    }
}
