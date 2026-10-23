<?php

/**
 * 本文件由 go2php 生成，源: api_clue_wechat_instance_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 支持按页查询广告主账户下的微信号码包
 */
class ApiOpenApi2ClueWechatInstanceListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\ClueWechatInstanceListV2Filter 过滤条件 */
    private ?\Oceanengine\Models\ClueWechatInstanceListV2Filter $filter = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ClueWechatInstanceListV2ApiService $service)
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
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\ClueWechatInstanceListV2Filter $filter): self
    {
        $this->filter = $filter;
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
     * 支持按页查询广告主账户下的微信号码包
     */
    public function execute(): \Oceanengine\Models\ClueWechatInstanceListV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/clue/wechat_instance/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ClueWechatInstanceListV2Response::class);

        return $result['model'];
    }
}
