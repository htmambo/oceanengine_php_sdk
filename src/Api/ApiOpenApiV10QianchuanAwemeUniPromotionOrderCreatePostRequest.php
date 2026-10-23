<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_order_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建随心推全域订单
 */
class ApiOpenApiV10QianchuanAwemeUniPromotionOrderCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10Request $qianchuanAwemeUniPromotionOrderCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeUniPromotionOrderCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAwemeUniPromotionOrderCreateV10Request(\Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10Request $qianchuanAwemeUniPromotionOrderCreateV10Request): self
    {
        $this->qianchuanAwemeUniPromotionOrderCreateV10Request = $qianchuanAwemeUniPromotionOrderCreateV10Request;
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
     * 创建随心推全域订单
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAwemeUniPromotionOrderCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/uni_promotion/order/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeUniPromotionOrderCreateV10Response::class);

        return $result['model'];
    }
}
