<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_can_transfer_target_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询当前账户(锚定账户)可以互相转账的账户列表
 */
class ApiOpenApiV30CgTransferCanTransferTargetListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织id */
    private ?int $organizationId = null;
    /** @var string 请求id，推荐uuid，方便请求链路对齐 */
    private ?string $bizRequestNo = null;
    /** @var int 锚定账户id，查询该账户的可转账账户列表 */
    private ?int $opponentTargetId = null;
    /** @var string 转账方向，以可转列表视角确定 */
    private ?string $transferDirection = null;
    /** @var string 业务线 */
    private ?string $platform = null;
    /** @var int 页码,从1开始 */
    private ?int $page = null;
    /** @var int 每页最多100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferCanTransferTargetListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 组织id
     */
    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * 请求id，推荐uuid，方便请求链路对齐
     */
    public function bizRequestNo(string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
        return $this;
    }

    /**
     * 锚定账户id，查询该账户的可转账账户列表
     */
    public function opponentTargetId(int $opponentTargetId): self
    {
        $this->opponentTargetId = $opponentTargetId;
        return $this;
    }

    /**
     * 转账方向，以可转列表视角确定
     */
    public function transferDirection(string $transferDirection): self
    {
        $this->transferDirection = $transferDirection;
        return $this;
    }

    /**
     * 业务线
     */
    public function platform(string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 页码,从1开始
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 每页最多100
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 查询当前账户(锚定账户)可以互相转账的账户列表
     */
    public function execute(): \Oceanengine\Models\CgTransferCanTransferTargetListV30Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
        }
        if ($this->bizRequestNo === null) {
            throw new \InvalidArgumentException('bizRequestNo is required and must be specified');
        }
        if ($this->opponentTargetId === null) {
            throw new \InvalidArgumentException('opponentTargetId is required and must be specified');
        }
        if ($this->transferDirection === null) {
            throw new \InvalidArgumentException('transferDirection is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['organization_id'] = $this->organizationId;
        $queryParams['biz_request_no'] = $this->bizRequestNo;
        $queryParams['opponent_target_id'] = $this->opponentTargetId;
        $queryParams['transfer_direction'] = $this->transferDirection;
        $queryParams['platform'] = $this->platform;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/can_transfer_target/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferCanTransferTargetListV30Response::class);

        return $result['model'];
    }
}
