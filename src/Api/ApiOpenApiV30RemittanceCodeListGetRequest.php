<?php

/**
 * 本文件由 go2php 生成，源: api_remittance_code_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据账号ID或者汇款码查询汇款码信息
 */
class ApiOpenApiV30RemittanceCodeListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商账号ID */
    private ?int $agentId = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var string[] 汇款码列表 */
    private ?array $remittanceCodeList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(RemittanceCodeListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商账号ID
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 汇款码列表
     */
    public function remittanceCodeList(array $remittanceCodeList): self
    {
        $this->remittanceCodeList = $remittanceCodeList;
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
     * 根据账号ID或者汇款码查询汇款码信息
     */
    public function execute(): \Oceanengine\Models\RemittanceCodeListV30Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->agentId < 1) {
            throw new \InvalidArgumentException('agentId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->remittanceCodeList !== null) {
            $queryParams['remittance_code_list'] = $this->remittanceCodeList;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/remittance_code/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\RemittanceCodeListV30Response::class);

        return $result['model'];
    }
}
