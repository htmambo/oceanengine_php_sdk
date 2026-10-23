<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_track_url_check_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 开发文档：https://bytedance.feishu.cn/wiki/wikcnHM6yUStX7cq9noC9fSWqz7
 * 千川RD：@郭丰瑞 @杨旭
 * MAPI RD：@郭卜滔
 * PM：@朱颖波
 */
class ApiOpenApiV10QianchuanTrackUrlCheckGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $trackUrl = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanTrackUrlCheckV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function trackUrl(array $trackUrl): self
    {
        $this->trackUrl = $trackUrl;
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
     * 开发文档：https://bytedance.feishu.cn/wiki/wikcnHM6yUStX7cq9noC9fSWqz7
     */
    public function execute(): \Oceanengine\Models\QianchuanTrackUrlCheckV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->trackUrl === null) {
            throw new \InvalidArgumentException('trackUrl is required and must be specified');
        }
        if (count($this->trackUrl) < 1) {
            throw new \InvalidArgumentException('trackUrl must have at least 1 elements');
        }
        if (count($this->trackUrl) > 5) {
            throw new \InvalidArgumentException('trackUrl must have less than 5 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['track_url'] = $this->trackUrl;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/track_url/check/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanTrackUrlCheckV10Response::class);

        return $result['model'];
    }
}
