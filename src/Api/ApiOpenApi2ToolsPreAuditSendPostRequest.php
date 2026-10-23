<?php

/**
 * 本文件由 go2php 生成，源: api_tools_pre_audit_send_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口，用户可以对素材进行前置预审送审，提前获取素材可能的审核结果。
 * > 需要注意的是前置预审的结果和最终的素材的审核结果可能存在出入，前置预审结果仅供参考。
 */
class ApiOpenApi2ToolsPreAuditSendPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsPreAuditSendV2Request $toolsPreAuditSendV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPreAuditSendV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsPreAuditSendV2Request(\Oceanengine\Models\ToolsPreAuditSendV2Request $toolsPreAuditSendV2Request): self
    {
        $this->toolsPreAuditSendV2Request = $toolsPreAuditSendV2Request;
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
     * 通过此接口，用户可以对素材进行前置预审送审，提前获取素材可能的审核结果。
     */
    public function execute(): \Oceanengine\Models\ToolsPreAuditSendV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsPreAuditSendV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/pre_audit/send/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPreAuditSendV2Response::class);

        return $result['model'];
    }
}
