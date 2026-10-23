<?php

/**
 * 本文件由 go2php 生成，源: api_local_im_send_msg_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 外部调用支持isv消息发送
 */
class ApiOpenApiV30LocalImSendMsgPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalImSendMsgV30Request $localImSendMsgV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalImSendMsgV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localImSendMsgV30Request(\Oceanengine\Models\LocalImSendMsgV30Request $localImSendMsgV30Request): self
    {
        $this->localImSendMsgV30Request = $localImSendMsgV30Request;
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
     * 外部调用支持isv消息发送
     */
    public function execute(): \Oceanengine\Models\LocalImSendMsgV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localImSendMsgV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/im/send/msg/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalImSendMsgV30Response::class);

        return $result['model'];
    }
}
