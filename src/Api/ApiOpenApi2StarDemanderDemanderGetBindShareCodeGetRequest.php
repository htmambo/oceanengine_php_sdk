<?php

/**
 * 本文件由 go2php 生成，源: api_star_demander_demander_get_bind_share_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 客户获取达人绑定口令码
 */
class ApiOpenApi2StarDemanderDemanderGetBindShareCodeGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户id */
    private ?int $starId = null;
    /** @var string 客户阵地达人唯一标识 */
    private ?string $bizUid = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDemanderDemanderGetBindShareCodeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户id
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 客户阵地达人唯一标识
     */
    public function bizUid(string $bizUid): self
    {
        $this->bizUid = $bizUid;
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
     * 客户获取达人绑定口令码
     */
    public function execute(): \Oceanengine\Models\StarDemanderDemanderGetBindShareCodeV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->bizUid === null) {
            throw new \InvalidArgumentException('bizUid is required and must be specified');
        }
        if (strlen($this->bizUid) > 255) {
            throw new \InvalidArgumentException('bizUid must have less than 255 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['biz_uid'] = $this->bizUid;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/demander/demander_get_bind_share_code/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDemanderDemanderGetBindShareCodeV2Response::class);

        return $result['model'];
    }
}
