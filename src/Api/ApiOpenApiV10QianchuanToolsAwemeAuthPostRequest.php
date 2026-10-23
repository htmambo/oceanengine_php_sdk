<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_aweme_auth_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告主授权抖音号，仅供曾经在pc进行过抖音号授权的广告主使用
 * https://bytedance.feishu.cn/wiki/BZdCwMstNirkpYkfPV0cgHSLn7g
 */
class ApiOpenApiV10QianchuanToolsAwemeAuthPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanToolsAwemeAuthV10Request $qianchuanToolsAwemeAuthV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsAwemeAuthV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanToolsAwemeAuthV10Request(\Oceanengine\Models\QianchuanToolsAwemeAuthV10Request $qianchuanToolsAwemeAuthV10Request): self
    {
        $this->qianchuanToolsAwemeAuthV10Request = $qianchuanToolsAwemeAuthV10Request;
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
     * 广告主授权抖音号，仅供曾经在pc进行过抖音号授权的广告主使用
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsAwemeAuthV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanToolsAwemeAuthV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/aweme_auth/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsAwemeAuthV10Response::class);

        return $result['model'];
    }
}
