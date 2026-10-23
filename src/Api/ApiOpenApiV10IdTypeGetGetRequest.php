<?php

/**
 * 本文件由 go2php 生成，源: api_id_type_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 给定一个ID, 识别出ID对应的类型
 */
class ApiOpenApiV10IdTypeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string 实体Id（必填） */
    private ?string $entityId = null;
    /** @var array 扩展字段（选填） */
    private ?array $extra = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(IdTypeGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 实体Id（必填）
     */
    public function entityId(string $entityId): self
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * 扩展字段（选填）
     */
    public function extra(array $extra): self
    {
        $this->extra = $extra;
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
     * 给定一个ID, 识别出ID对应的类型
     */
    public function execute(): \Oceanengine\Models\IdTypeGetV10Response
    {
        if ($this->entityId === null) {
            throw new \InvalidArgumentException('entityId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['entity_id'] = $this->entityId;
        if ($this->extra !== null) {
            $queryParams['extra'] = $this->extra;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/id_type/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\IdTypeGetV10Response::class);

        return $result['model'];
    }
}
