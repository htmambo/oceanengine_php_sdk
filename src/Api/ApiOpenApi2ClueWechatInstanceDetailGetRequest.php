<?php

/**
 * 本文件由 go2php 生成，源: api_clue_wechat_instance_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取指定微信号码包详情
 */
class ApiOpenApi2ClueWechatInstanceDetailGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var int 微信号码包ID */
    private ?int $instanceId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueWechatInstanceDetailV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 微信号码包ID
     */
    public function instanceId(int $instanceId): self
    {
        $this->instanceId = $instanceId;
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
     * 获取指定微信号码包详情
     */
    public function execute(): \Oceanengine\Models\ClueWechatInstanceDetailV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->instanceId === null) {
            throw new \InvalidArgumentException('instanceId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['instance_id'] = $this->instanceId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/wechat_instance/detail/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueWechatInstanceDetailV2Response::class);

        return $result['model'];
    }
}
