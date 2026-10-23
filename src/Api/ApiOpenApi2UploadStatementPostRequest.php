<?php

/**
 * 本文件由 go2php 生成，源: api_upload_statement_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 上传待盖章的结算单附件
 */
class ApiOpenApi2UploadStatementPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商id */
    private ?int $agentId = null;
    /** @var \Oceanengine\FormFileInfo 文件 */
    private ?\Oceanengine\FormFileInfo $file = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(UploadStatementV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商id
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 文件
     */
    public function file(\Oceanengine\FormFileInfo $file): self
    {
        $this->file = $file;
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
     * 上传待盖章的结算单附件
     */
    public function execute(): \Oceanengine\Models\UploadStatementV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        if ($this->file === null) {
            throw new \InvalidArgumentException('file is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['agent_id'] = $this->agentId;
        if ($this->file !== null) {
            $files['file'] = $this->file;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/upload/statement/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\UploadStatementV2Response::class);

        return $result['model'];
    }
}
