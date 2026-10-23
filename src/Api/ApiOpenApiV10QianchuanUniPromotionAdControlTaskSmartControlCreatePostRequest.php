<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_smart_control_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 创建直播-一键控量计划
 */
class ApiOpenApiV10QianchuanUniPromotionAdControlTaskSmartControlCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskSmartControlCreateV10Request $qianchuanUniPromotionAdControlTaskSmartControlCreateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdControlTaskSmartControlCreateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdControlTaskSmartControlCreateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdControlTaskSmartControlCreateV10Request $qianchuanUniPromotionAdControlTaskSmartControlCreateV10Request): self
    {
        $this->qianchuanUniPromotionAdControlTaskSmartControlCreateV10Request = $qianchuanUniPromotionAdControlTaskSmartControlCreateV10Request;
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
     * 创建直播-一键控量计划
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdControlTaskSmartControlCreateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdControlTaskSmartControlCreateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/control_task/smart_control/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdControlTaskSmartControlCreateV10Response::class);

        return $result['model'];
    }
}
