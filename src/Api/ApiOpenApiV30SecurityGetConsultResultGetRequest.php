<?php

/**
 * 本文件由 go2php 生成，源: api_security_get_consult_result_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询已申诉对象的申诉结果
 */
class ApiOpenApiV30SecurityGetConsultResultGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主 ID */
    private ?int $advertiserId = null;
    /** @var int[] 申诉追踪 ID 列表，至多 100 个 */
    private ?array $appealTrackIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SecurityGetConsultResultV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主 ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 申诉追踪 ID 列表，至多 100 个
     */
    public function appealTrackIds(array $appealTrackIds): self
    {
        $this->appealTrackIds = $appealTrackIds;
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
     * 查询已申诉对象的申诉结果
     */
    public function execute(): \Oceanengine\Models\SecurityGetConsultResultV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->appealTrackIds === null) {
            throw new \InvalidArgumentException('appealTrackIds is required and must be specified');
        }
        if (count($this->appealTrackIds) < 1) {
            throw new \InvalidArgumentException('appealTrackIds must have at least 1 elements');
        }
        if (count($this->appealTrackIds) > 100) {
            throw new \InvalidArgumentException('appealTrackIds must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['appeal_track_ids'] = $this->appealTrackIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/security/get_consult_result/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SecurityGetConsultResultV30Response::class);

        return $result['model'];
    }
}
