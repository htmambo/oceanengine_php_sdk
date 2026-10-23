<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_smart_boost_ad_boost_set_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * https://bytedance.feishu.cn/wiki/wikcnq0rDUKyzKVSPWUAt6EJD4b
 */
class ApiOpenApiV10QianchuanToolsSmartBoostAdBoostSetPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanToolsSmartBoostAdBoostSetV10Request $qianchuanToolsSmartBoostAdBoostSetV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsSmartBoostAdBoostSetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanToolsSmartBoostAdBoostSetV10Request(\Oceanengine\Models\QianchuanToolsSmartBoostAdBoostSetV10Request $qianchuanToolsSmartBoostAdBoostSetV10Request): self
    {
        $this->qianchuanToolsSmartBoostAdBoostSetV10Request = $qianchuanToolsSmartBoostAdBoostSetV10Request;
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
     * https://bytedance.feishu.cn/wiki/wikcnq0rDUKyzKVSPWUAt6EJD4b
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostSetV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanToolsSmartBoostAdBoostSetV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/smart_boost/ad_boost/set/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostSetV10Response::class);

        return $result['model'];
    }
}
