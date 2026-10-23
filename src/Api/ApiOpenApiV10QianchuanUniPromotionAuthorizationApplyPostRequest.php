<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_authorization_apply_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 广告主申请全域推广授权
 */
class ApiOpenApiV10QianchuanUniPromotionAuthorizationApplyPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10Request $qianchuanUniPromotionAuthorizationApplyV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAuthorizationApplyV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAuthorizationApplyV10Request(\Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10Request $qianchuanUniPromotionAuthorizationApplyV10Request): self
    {
        $this->qianchuanUniPromotionAuthorizationApplyV10Request = $qianchuanUniPromotionAuthorizationApplyV10Request;
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
     * 广告主申请全域推广授权
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAuthorizationApplyV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/authorization/apply/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAuthorizationApplyV10Response::class);

        return $result['model'];
    }
}
