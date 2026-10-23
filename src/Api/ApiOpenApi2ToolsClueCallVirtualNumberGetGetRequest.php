<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_call_virtual_number_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApi2ToolsClueCallVirtualNumberGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int 线索id */
    private ?int $clueId = null;
    /** @var string 主叫号码，必须为11位手机号码，否则呼叫失败 */
    private ?string $callerNumber = null;
    /** @var string 被叫号码，即线索号码 */
    private ?string $calleeNumber = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueCallVirtualNumberGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 线索id
     */
    public function clueId(int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * 主叫号码，必须为11位手机号码，否则呼叫失败
     */
    public function callerNumber(string $callerNumber): self
    {
        $this->callerNumber = $callerNumber;
        return $this;
    }

    /**
     * 被叫号码，即线索号码
     */
    public function calleeNumber(string $calleeNumber): self
    {
        $this->calleeNumber = $calleeNumber;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\ToolsClueCallVirtualNumberGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->clueId === null) {
            throw new \InvalidArgumentException('clueId is required and must be specified');
        }
        if ($this->clueId < 1) {
            throw new \InvalidArgumentException('clueId must be greater than 1');
        }
        if ($this->callerNumber === null) {
            throw new \InvalidArgumentException('callerNumber is required and must be specified');
        }
        if (strlen($this->callerNumber) < 11) {
            throw new \InvalidArgumentException('callerNumber must have at least 11 elements');
        }
        if (strlen($this->callerNumber) > 11) {
            throw new \InvalidArgumentException('callerNumber must have less than 11 elements');
        }
        if ($this->calleeNumber === null) {
            throw new \InvalidArgumentException('calleeNumber is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['clue_id'] = $this->clueId;
        $queryParams['caller_number'] = $this->callerNumber;
        $queryParams['callee_number'] = $this->calleeNumber;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/call_virtual_number/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueCallVirtualNumberGetV2Response::class);

        return $result['model'];
    }
}
