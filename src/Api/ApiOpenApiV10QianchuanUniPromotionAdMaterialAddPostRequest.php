<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_material_add_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 添加全域推广计划下素材
 */
class ApiOpenApiV10QianchuanUniPromotionAdMaterialAddPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10Request $qianchuanUniPromotionAdMaterialAddV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdMaterialAddV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdMaterialAddV10Request(\Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10Request $qianchuanUniPromotionAdMaterialAddV10Request): self
    {
        $this->qianchuanUniPromotionAdMaterialAddV10Request = $qianchuanUniPromotionAdMaterialAddV10Request;
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
     * 添加全域推广计划下素材
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdMaterialAddV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/material/add/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10Response::class);

        return $result['model'];
    }
}
