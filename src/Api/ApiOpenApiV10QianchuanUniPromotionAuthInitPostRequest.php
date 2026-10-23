<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_auth_init_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 授权初始化接口
 */
class ApiOpenApiV10QianchuanUniPromotionAuthInitPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAuthInitV10Request $qianchuanUniPromotionAuthInitV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAuthInitV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAuthInitV10Request(\Oceanengine\Models\QianchuanUniPromotionAuthInitV10Request $qianchuanUniPromotionAuthInitV10Request): self
    {
        $this->qianchuanUniPromotionAuthInitV10Request = $qianchuanUniPromotionAuthInitV10Request;
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
     * 授权初始化接口
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAuthInitV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAuthInitV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/auth/init/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAuthInitV10Response::class);

        return $result['model'];
    }
}
