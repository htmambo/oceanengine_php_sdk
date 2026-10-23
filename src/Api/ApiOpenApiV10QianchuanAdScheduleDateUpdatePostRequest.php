<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_ad_schedule_date_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 批量更新计划投放日期
 */
class ApiOpenApiV10QianchuanAdScheduleDateUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\QianchuanAdScheduleDateUpdateV10Request $qianchuanAdScheduleDateUpdateV10Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAdScheduleDateUpdateV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function qianchuanAdScheduleDateUpdateV10Request(\Oceanengine\Models\QianchuanAdScheduleDateUpdateV10Request $qianchuanAdScheduleDateUpdateV10Request): self
    {
        $this->qianchuanAdScheduleDateUpdateV10Request = $qianchuanAdScheduleDateUpdateV10Request;
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
     * 批量更新计划投放日期
     */
    public function execute(): \Oceanengine\Models\QianchuanAdScheduleDateUpdateV10Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->qianchuanAdScheduleDateUpdateV10Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/ad/schedule_date/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAdScheduleDateUpdateV10Response::class);

        return $result['model'];
    }
}
