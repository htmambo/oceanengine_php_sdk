<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v2_bp_transfer_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 发起转账，支持账户<->钱包、账户<->账户m:n转账，但一次转账一个账户id/钱包id不能既是减款方，也是加款方。
 * 备款钱包与虚拟广告主不支持互转
 */
class ApiOpenApiV30CgTransferV2BpTransferCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\CgTransferV2BpTransferCreateV30Request $cgTransferV2BpTransferCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferV2BpTransferCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function cgTransferV2BpTransferCreateV30Request(\Oceanengine\Models\CgTransferV2BpTransferCreateV30Request $cgTransferV2BpTransferCreateV30Request): self
    {
        $this->cgTransferV2BpTransferCreateV30Request = $cgTransferV2BpTransferCreateV30Request;
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
     * 发起转账，支持账户<->钱包、账户<->账户m:n转账，但一次转账一个账户id/钱包id不能既是减款方，也是加款方。
     */
    public function execute(): \Oceanengine\Models\CgTransferV2BpTransferCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->cgTransferV2BpTransferCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/v2/bp/transfer/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferV2BpTransferCreateV30Response::class);

        return $result['model'];
    }
}
