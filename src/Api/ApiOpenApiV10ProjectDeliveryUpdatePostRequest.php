<?php

/**
 * 本文件由 go2php 生成，源: api_project_delivery_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * DiagnoseDeliveryIssue：传入 advertiser_id 和 cdp_project_id。通过 CDP 查询有效广告关联；无广告时准备 ProjectCreateAds(NO_AD)，有广告时比较最近两个完整小时精排阶段 7/9 通过率，下降则 PvrCorrection 每次 +0.02、最高 1.10，否则返回需要用户补充新素材。dry_run 省略或 true 时仅查询与预览，显式 false 才允许执行现有创编或纠偏。响应只包含 success、res_msg、extra；操作详情和是否需要用户操作都在 extra，project_create_ads、pvr_correction、material_refresh 的值是 JSON 字符串。CDP 有效关联未校验开关状态，extra.ad_switch_state_checked=false。
 */
class ApiOpenApiV10ProjectDeliveryUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ProjectDeliveryUpdateV10Request $projectDeliveryUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ProjectDeliveryUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function projectDeliveryUpdateV10Request(\Oceanengine\Models\ProjectDeliveryUpdateV10Request $projectDeliveryUpdateV10Request): self
    {
        $this->projectDeliveryUpdateV10Request = $projectDeliveryUpdateV10Request;
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
     * DiagnoseDeliveryIssue：传入 advertiser_id 和 cdp_project_id。通过 CDP 查询有效广告关联；无广告时准备 ProjectCreateAds(NO_AD)，有广告时比较最近两个完整小时精排阶段 7/9 通过率，下降则 PvrCorrection 每次 +0.02、最高 1.10，否则返回需要用户补充新素材。dry_run 省略或 true 时仅查询与预览，显式 false 才允许执行现有创编或纠偏。响应只包含 success、res_msg、extra；操作详情和是否需要用户操作都在 extra，project_create_ads、pvr_correction、material_refresh 的值是 JSON 字符串。CDP 有效关联未校验开关状态，extra.ad_switch_state_checked=false。
     */
    public function execute(): \Oceanengine\Models\ProjectDeliveryUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->projectDeliveryUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/project_delivery/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ProjectDeliveryUpdateV10Response::class);

        return $result['model'];
    }
}
