<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改调控任务设置
 */
class ApiOpenApiV10QianchuanUniPromotionAdControlTaskUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskUpdateV10Request $qianchuanUniPromotionAdControlTaskUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdControlTaskUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdControlTaskUpdateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdControlTaskUpdateV10Request $qianchuanUniPromotionAdControlTaskUpdateV10Request): self
    {
        $this->qianchuanUniPromotionAdControlTaskUpdateV10Request = $qianchuanUniPromotionAdControlTaskUpdateV10Request;
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
     * 修改调控任务设置
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdControlTaskUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdControlTaskUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/control_task/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdControlTaskUpdateV10Response::class);

        return $result['model'];
    }
}
