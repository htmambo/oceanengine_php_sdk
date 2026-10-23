<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_duration_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改调控任务投放时长
 */
class ApiOpenApiV10QianchuanUniPromotionAdControlTaskDurationUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10Request $qianchuanUniPromotionAdControlTaskDurationUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdControlTaskDurationUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdControlTaskDurationUpdateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10Request $qianchuanUniPromotionAdControlTaskDurationUpdateV10Request): self
    {
        $this->qianchuanUniPromotionAdControlTaskDurationUpdateV10Request = $qianchuanUniPromotionAdControlTaskDurationUpdateV10Request;
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
     * 修改调控任务投放时长
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdControlTaskDurationUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/control_task/duration/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10Response::class);

        return $result['model'];
    }
}
