<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_export_boost_item_group_result_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询导出投中加热组数据
 */
class ApiOpenApi2StarVasGetExportBoostItemGroupResultGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户ID */
    private ?int $starId = null;
    /** @var int 导出任务唯一标识 */
    private ?int $ticketId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarVasGetExportBoostItemGroupResultV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户ID
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 导出任务唯一标识
     */
    public function ticketId(int $ticketId): self
    {
        $this->ticketId = $ticketId;
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
     * 查询导出投中加热组数据
     */
    public function execute(): \Oceanengine\Models\StarVasGetExportBoostItemGroupResultV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->ticketId === null) {
            throw new \InvalidArgumentException('ticketId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['ticket_id'] = $this->ticketId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/vas/get_export_boost_item_group_result/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarVasGetExportBoostItemGroupResultV2Response::class);

        return $result['model'];
    }
}
