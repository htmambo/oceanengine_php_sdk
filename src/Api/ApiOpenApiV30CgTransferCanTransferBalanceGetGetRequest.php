<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_can_transfer_balance_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询转出方与转入方之间最大可转金额，接口内已自动扣除需要预留的竞价消耗保证金，支持查询1:N转账的最大可转金额
 */
class ApiOpenApiV30CgTransferCanTransferBalanceGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织id */
    private ?int $organizationId = null;
    /** @var string 请求id */
    private ?string $bizRequestNo = null;
    /** @var int 锚定账户id，1:N的1 */
    private ?int $opponentTargetId = null;
    /** @var int[] 目标账户id列表，1:N的N，最多支持100个 */
    private ?array $targetIdList = null;
    /** @var string 转账方向，以目标账户视角确定 */
    private ?string $transferDirection = null;
    /** @var string 转账业务线 */
    private ?string $platform = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferCanTransferBalanceGetV30ApiService $service)
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
     * 请求id
     */
    public function bizRequestNo(string $bizRequestNo): self
    {
        $this->bizRequestNo = $bizRequestNo;
        return $this;
    }

    /**
     * 锚定账户id，1:N的1
     */
    public function opponentTargetId(int $opponentTargetId): self
    {
        $this->opponentTargetId = $opponentTargetId;
        return $this;
    }

    /**
     * 目标账户id列表，1:N的N，最多支持100个
     */
    public function targetIdList(array $targetIdList): self
    {
        $this->targetIdList = $targetIdList;
        return $this;
    }

    /**
     * 转账方向，以目标账户视角确定
     */
    public function transferDirection(string $transferDirection): self
    {
        $this->transferDirection = $transferDirection;
        return $this;
    }

    /**
     * 转账业务线
     */
    public function platform(string $platform): self
    {
        $this->platform = $platform;
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
     * 查询转出方与转入方之间最大可转金额，接口内已自动扣除需要预留的竞价消耗保证金，支持查询1:N转账的最大可转金额
     */
    public function execute(): \Oceanengine\Models\CgTransferCanTransferBalanceGetV30Response
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
        if ($this->targetIdList === null) {
            throw new \InvalidArgumentException('targetIdList is required and must be specified');
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
        $queryParams['target_id_list'] = $this->targetIdList;
        $queryParams['transfer_direction'] = $this->transferDirection;
        $queryParams['platform'] = $this->platform;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/can_transfer_balance/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferCanTransferBalanceGetV30Response::class);

        return $result['model'];
    }
}
