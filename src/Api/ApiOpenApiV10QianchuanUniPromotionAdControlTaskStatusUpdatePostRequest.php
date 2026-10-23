<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_status_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改任务调控状态
 */
class ApiOpenApiV10QianchuanUniPromotionAdControlTaskStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10Request $qianchuanUniPromotionAdControlTaskStatusUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdControlTaskStatusUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdControlTaskStatusUpdateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10Request $qianchuanUniPromotionAdControlTaskStatusUpdateV10Request): self
    {
        $this->qianchuanUniPromotionAdControlTaskStatusUpdateV10Request = $qianchuanUniPromotionAdControlTaskStatusUpdateV10Request;
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
     * 修改任务调控状态
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdControlTaskStatusUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/control_task/status/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdControlTaskStatusUpdateV10Response::class);

        return $result['model'];
    }
}
