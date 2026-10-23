<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v3_wallet_can_transfer_balance_between_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询转出方与转入方之间最大可转金额，支持查询M:N。只支持钱包<->钱包场景
 */
class ApiOpenApiV30CgTransferV3WalletCanTransferBalanceBetweenAccountGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织id */
    private ?int $organizationId = null;
    /** @var string 转账来源 */
    private ?string $origin = null;
    /** @var string 登录用户类型 */
    private ?string $userType = null;
    /** @var \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30TransferParticipantListInner[] 转账参与方列表，最多支持100个 */
    private ?array $transferParticipantList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30ApiService $service)
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
     * 转账来源
     */
    public function origin(string $origin): self
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * 登录用户类型
     */
    public function userType(string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * 转账参与方列表，最多支持100个
     */
    public function transferParticipantList(array $transferParticipantList): self
    {
        $this->transferParticipantList = $transferParticipantList;
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
     * 查询转出方与转入方之间最大可转金额，支持查询M:N。只支持钱包<->钱包场景
     */
    public function execute(): \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
        }
        if ($this->origin === null) {
            throw new \InvalidArgumentException('origin is required and must be specified');
        }
        if ($this->userType === null) {
            throw new \InvalidArgumentException('userType is required and must be specified');
        }
        if ($this->transferParticipantList === null) {
            throw new \InvalidArgumentException('transferParticipantList is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['organization_id'] = $this->organizationId;
        $queryParams['origin'] = $this->origin;
        $queryParams['user_type'] = $this->userType;
        $__encoded0 = json_encode($this->transferParticipantList);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: transferParticipantList');
            }
            $queryParams['transfer_participant_list'] = $__encoded0;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/cg_transfer/v3/wallet/can_transfer_balance_between_account/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30Response::class);

        return $result['model'];
    }
}
