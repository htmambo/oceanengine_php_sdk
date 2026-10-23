<?php

/**
 * 本文件由 go2php 生成，源: api_tools_agreement_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询当前投放账号下的协议列表，包括待签署协议、需重新签署协议、已签署协议
 */
class ApiOpenApiV30ToolsAgreementListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string[] 通知类型列表，不传则返回全部配置类型 */
    private ?array $types = null;
    /** @var string 签署状态，不传则不过滤；0-未签署，1-已签署 */
    private ?string $signStatus = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsAgreementListV30ApiService $service)
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
     * 通知类型列表，不传则返回全部配置类型
     */
    public function types(array $types): self
    {
        $this->types = $types;
        return $this;
    }

    /**
     * 签署状态，不传则不过滤；0-未签署，1-已签署
     */
    public function signStatus(string $signStatus): self
    {
        $this->signStatus = $signStatus;
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
     * 查询当前投放账号下的协议列表，包括待签署协议、需重新签署协议、已签署协议
     */
    public function execute(): \Oceanengine\Models\ToolsAgreementListV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->types !== null) {
            $queryParams['types'] = $this->types;
        }
        if ($this->signStatus !== null) {
            $queryParams['sign_status'] = $this->signStatus;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/agreement/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsAgreementListV30Response::class);

        return $result['model'];
    }
}
