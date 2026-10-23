<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_rta_set_scope_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 设置RTA生效范围，（注：订单维度绑定的RTA_id，不支持换绑。账户维度支持换绑，但建议账户没有在投计划时再换绑）
 */
class ApiOpenApiV30DouplusRtaSetScopePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\DouplusRtaSetScopeV30Request $douplusRtaSetScopeV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusRtaSetScopeV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function douplusRtaSetScopeV30Request(\Oceanengine\Models\DouplusRtaSetScopeV30Request $douplusRtaSetScopeV30Request): self
    {
        $this->douplusRtaSetScopeV30Request = $douplusRtaSetScopeV30Request;
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
     * 设置RTA生效范围，（注：订单维度绑定的RTA_id，不支持换绑。账户维度支持换绑，但建议账户没有在投计划时再换绑）
     */
    public function execute(): \Oceanengine\Models\DouplusRtaSetScopeV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->douplusRtaSetScopeV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/rta/set_scope/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusRtaSetScopeV30Response::class);

        return $result['model'];
    }
}
