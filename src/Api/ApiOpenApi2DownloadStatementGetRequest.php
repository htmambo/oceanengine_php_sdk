<?php

/**
 * 本文件由 go2php 生成，源: api_download_statement_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取结算单附件的下载链接，链接有效3小时，过后可重新获取
 */
class ApiOpenApi2DownloadStatementGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $agentId = null;
    /** @var int 附件id */
    private ?int $attachId = null;
    /** @var int 结算单id */
    private ?int $statementId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DownloadStatementV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 附件id
     */
    public function attachId(int $attachId): self
    {
        $this->attachId = $attachId;
        return $this;
    }

    /**
     * 结算单id
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
     * 获取结算单附件的下载链接，链接有效3小时，过后可重新获取
     */
    public function execute(): \Oceanengine\Models\DownloadStatementV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->attachId === null) {
            throw new \InvalidArgumentException('attachId is required and must be specified');
        }
        if ($this->statementId === null) {
            throw new \InvalidArgumentException('statementId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        $queryParams['attach_id'] = $this->attachId;
        $queryParams['statement_id'] = $this->statementId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/download/statement/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DownloadStatementV2Response::class);

        return $result['model'];
    }
}
