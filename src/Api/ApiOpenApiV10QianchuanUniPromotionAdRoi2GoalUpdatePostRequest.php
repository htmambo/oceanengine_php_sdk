<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_roi2_goal_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新全域计划的支付ROI目标
 */
class ApiOpenApiV10QianchuanUniPromotionAdRoi2GoalUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10Request $qianchuanUniPromotionAdRoi2GoalUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdRoi2GoalUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanUniPromotionAdRoi2GoalUpdateV10Request(\Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10Request $qianchuanUniPromotionAdRoi2GoalUpdateV10Request): self
    {
        $this->qianchuanUniPromotionAdRoi2GoalUpdateV10Request = $qianchuanUniPromotionAdRoi2GoalUpdateV10Request;
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
     * 更新全域计划的支付ROI目标
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanUniPromotionAdRoi2GoalUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/roi2_goal/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdRoi2GoalUpdateV10Response::class);

        return $result['model'];
    }
}
