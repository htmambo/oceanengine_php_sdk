<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_ext_info_callback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 线索回传后，可享受免费外呼，无效线索返款，提升广告投放精准度。同一条线索可以重复标注，且多次回传的信息都会记录
 */
class ApiOpenApi2ToolsClueExtInfoCallbackPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueExtInfoCallbackV2Request $toolsClueExtInfoCallbackV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueExtInfoCallbackV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueExtInfoCallbackV2Request(\Oceanengine\Models\ToolsClueExtInfoCallbackV2Request $toolsClueExtInfoCallbackV2Request): self
    {
        $this->toolsClueExtInfoCallbackV2Request = $toolsClueExtInfoCallbackV2Request;
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
     * 线索回传后，可享受免费外呼，无效线索返款，提升广告投放精准度。同一条线索可以重复标注，且多次回传的信息都会记录
     */
    public function execute(): \Oceanengine\Models\ToolsClueExtInfoCallbackV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueExtInfoCallbackV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/ext_info/callback/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueExtInfoCallbackV2Response::class);

        return $result['model'];
    }
}
