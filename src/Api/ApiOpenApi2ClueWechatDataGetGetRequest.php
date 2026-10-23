<?php

/**
 * 本文件由 go2php 生成，源: api_clue_wechat_data_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 线索通获取微信加粉链路数据
 */
class ApiOpenApi2ClueWechatDataGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户id */
    private ?int $advertiserId = null;
    /** @var string 微信union_id */
    private ?string $unionId = null;
    /** @var string 企业微信「联系我」state参数 */
    private ?string $state = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueWechatDataGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 微信union_id
     */
    public function unionId(string $unionId): self
    {
        $this->unionId = $unionId;
        return $this;
    }

    /**
     * 企业微信「联系我」state参数
     */
    public function state(string $state): self
    {
        $this->state = $state;
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
     * 线索通获取微信加粉链路数据
     */
    public function execute(): \Oceanengine\Models\ClueWechatDataGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->unionId === null) {
            throw new \InvalidArgumentException('unionId is required and must be specified');
        }
        if (strlen($this->unionId) < 1) {
            throw new \InvalidArgumentException('unionId must have at least 1 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['union_id'] = $this->unionId;
        if ($this->state !== null) {
            $queryParams['state'] = $this->state;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/wechat_data/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueWechatDataGetV2Response::class);

        return $result['model'];
    }
}
