<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_product_delete_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 删除全域计划下商品
 */
class ApiOpenApiV10QianchuanUniPromotionAdProductDeletePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdProductDeleteV10Request $qianchuanUniPromotionAdProductDeleteV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdProductDeleteV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdProductDeleteV10Request(\Oceanengine\Models\QianchuanUniPromotionAdProductDeleteV10Request $qianchuanUniPromotionAdProductDeleteV10Request): self
    {
        $this->qianchuanUniPromotionAdProductDeleteV10Request = $qianchuanUniPromotionAdProductDeleteV10Request;
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
     * 删除全域计划下商品
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdProductDeleteV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdProductDeleteV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/product/delete/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdProductDeleteV10Response::class);

        return $result['model'];
    }
}
