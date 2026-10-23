<?php

/**
 * 本文件由 go2php 生成，源: api_download_statement_esign_file_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询结算单双章附件下载链接
 */
class ApiOpenApi2DownloadStatementEsignFileGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商ID */
    private ?int $agentId = null;
    /** @var int 结算单ID */
    private ?int $statementId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DownloadStatementEsignFileV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商ID
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 结算单ID
     */
    public function statementId(int $statementId): self
    {
        $this->statementId = $statementId;
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
     * 查询结算单双章附件下载链接
     */
    public function execute(): \Oceanengine\Models\DownloadStatementEsignFileV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->statementId === null) {
            throw new \InvalidArgumentException('statementId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['statement_id'] = $this->statementId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/download/statement/esign_file/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DownloadStatementEsignFileV2Response::class);

        return $result['model'];
    }
}
