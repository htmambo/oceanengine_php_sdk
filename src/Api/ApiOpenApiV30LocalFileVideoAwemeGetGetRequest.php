<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_video_aweme_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 拉抖音号主页视频接口
 */
class ApiOpenApiV30LocalFileVideoAwemeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var string 页码游标值,第一次传\&quot;0\&quot;,之后每次传上次返回的值 */
    private ?string $cursor = null;
    /** @var \Oceanengine\Models\LocalFileVideoAwemeGetV30Filtering 过滤字段 */
    private ?\Oceanengine\Models\LocalFileVideoAwemeGetV30Filtering $filtering = null;
    /** @var string 排序字段 */
    private ?string $orderFiled = null;
    /** @var string ea，按预估效果排序的时候必传，仅支持传：OTO_PAY/OTO_PAY */
    private ?string $externalAction = null;
    /** @var int 默认10，最大100，最小1 */
    private ?int $count = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalFileVideoAwemeGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 页码游标值,第一次传\&quot;0\&quot;,之后每次传上次返回的值
     */
    public function cursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * 过滤字段
     */
    public function filtering(\Oceanengine\Models\LocalFileVideoAwemeGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 排序字段
     */
    public function orderFiled(string $orderFiled): self
    {
        $this->orderFiled = $orderFiled;
        return $this;
    }

    /**
     * ea，按预估效果排序的时候必传，仅支持传：OTO_PAY/OTO_PAY
     */
    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 默认10，最大100，最小1
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
     * 拉抖音号主页视频接口
     */
    public function execute(): \Oceanengine\Models\LocalFileVideoAwemeGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->cursor === null) {
            throw new \InvalidArgumentException('cursor is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->orderFiled !== null) {
            $queryParams['order_filed'] = $this->orderFiled;
        }
        if ($this->externalAction !== null) {
            $queryParams['external_action'] = $this->externalAction;
        }
        if ($this->count !== null) {
            $queryParams['count'] = $this->count;
        }
        $queryParams['cursor'] = $this->cursor;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/file/video/aweme/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalFileVideoAwemeGetV30Response::class);

        return $result['model'];
    }
}
