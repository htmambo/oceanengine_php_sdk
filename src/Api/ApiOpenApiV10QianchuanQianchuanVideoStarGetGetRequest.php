<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_qianchuan_video_star_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星图达人视频
 * https://bytedance.larkoffice.com/wiki/DMjkwqmcOi4SlHkj9EVckgOGnxf
 */
class ApiOpenApiV10QianchuanQianchuanVideoStarGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10Filtering 视频过滤条件 */
    private ?\Oceanengine\Models\QianchuanQianchuanVideoStarGetV10Filtering $filtering = null;
    /** @var string 排序字段。默认根据创建时间排序排序 - 按创建时间从近到远：creat_time - 按整体消耗从高到低:stat_cost - 按整体点击率从高到低:ctr - 按整体转化率从高到低:convert_rate - 按整体支付ROI从高到低:total_prepay_and_pay_order_roi2 - 按整体成交金额从高到低:total_pay_order_gmv_for_roi2 - 按播放数从高到低:view_cnt - 按点赞数从高到低:like_cnt - 按评论数从高到低:comment_cnt - 按分享数从高到低:share_cnt */
    private ?string $orderField = null;
    /** @var int 页码游标值，第一次拉取，无需入参 */
    private ?int $cursor = null;
    /** @var int 页面大小，默认值20，限制100 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanQianchuanVideoStarGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 视频过滤条件
     */
    public function filtering(\Oceanengine\Models\QianchuanQianchuanVideoStarGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 排序字段。默认根据创建时间排序排序 - 按创建时间从近到远：creat_time - 按整体消耗从高到低:stat_cost - 按整体点击率从高到低:ctr - 按整体转化率从高到低:convert_rate - 按整体支付ROI从高到低:total_prepay_and_pay_order_roi2 - 按整体成交金额从高到低:total_pay_order_gmv_for_roi2 - 按播放数从高到低:view_cnt - 按点赞数从高到低:like_cnt - 按评论数从高到低:comment_cnt - 按分享数从高到低:share_cnt
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 页码游标值，第一次拉取，无需入参
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 页面大小，默认值20，限制100
     */
    public function count(int $count): self
    {
        $this->count = $count;
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
     * 获取星图达人视频
     */
    public function execute(): \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->cursor !== null) {
            $queryParams['cursor'] = $this->cursor;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/qianchuan/video/star/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanQianchuanVideoStarGetV10Response::class);

        return $result['model'];
    }
}
