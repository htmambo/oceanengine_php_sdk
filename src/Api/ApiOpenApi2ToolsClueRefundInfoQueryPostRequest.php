<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_refund_info_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询线索返款相关信息。
 */
class ApiOpenApi2ToolsClueRefundInfoQueryPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueRefundInfoQueryV2Request $toolsClueRefundInfoQueryV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueRefundInfoQueryV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueRefundInfoQueryV2Request(\Oceanengine\Models\ToolsClueRefundInfoQueryV2Request $toolsClueRefundInfoQueryV2Request): self
    {
        $this->toolsClueRefundInfoQueryV2Request = $toolsClueRefundInfoQueryV2Request;
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
     * 查询线索返款相关信息。
     */
    public function execute(): \Oceanengine\Models\ToolsClueRefundInfoQueryV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueRefundInfoQueryV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/refund/info/query/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueRefundInfoQueryV2Response::class);

        return $result['model'];
    }
}
