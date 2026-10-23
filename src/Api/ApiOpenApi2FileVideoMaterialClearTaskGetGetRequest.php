<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_material_clear_task_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取清理任务列表
 */
class ApiOpenApi2FileVideoMaterialClearTaskGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var int[] 清理任务id列表，最多支持10个 */
    private ?array $clearIds = null;
    /** @var int 页码，默认：1 */
    private ?int $page = null;
    /** @var int 页面大小，默认10，范围：1-100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(FileVideoMaterialClearTaskGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 清理任务id列表，最多支持10个
     */
    public function clearIds(array $clearIds): self
    {
        $this->clearIds = $clearIds;
        return $this;
    }

    /**
     * 页码，默认：1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认10，范围：1-100
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 获取清理任务列表
     */
    public function execute(): \Oceanengine\Models\FileVideoMaterialClearTaskGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->clearIds !== null) {
            $queryParams['clear_ids'] = $this->clearIds;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/file/video/material/clear_task/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\FileVideoMaterialClearTaskGetV2Response::class);

        return $result['model'];
    }
}
