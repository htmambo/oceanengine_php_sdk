<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_private_message_callback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 允许服务商、代理商、crm等回传私信线索转化数据
 */
class ApiOpenApi2ToolsCluePrivateMessageCallbackPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2Request $toolsCluePrivateMessageCallbackV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsCluePrivateMessageCallbackV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsCluePrivateMessageCallbackV2Request(\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2Request $toolsCluePrivateMessageCallbackV2Request): self
    {
        $this->toolsCluePrivateMessageCallbackV2Request = $toolsCluePrivateMessageCallbackV2Request;
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
     * 允许服务商、代理商、crm等回传私信线索转化数据
     */
    public function execute(): \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsCluePrivateMessageCallbackV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/private_message/callback/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2Response::class);

        return $result['model'];
    }
}
