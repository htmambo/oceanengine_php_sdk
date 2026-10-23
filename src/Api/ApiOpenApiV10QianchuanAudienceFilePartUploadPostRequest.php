<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_audience_file_part_upload_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * https://bytedance.feishu.cn/wiki/wikcnBy344NTluLkMQ9anjV5nff
 */
class ApiOpenApiV10QianchuanAudienceFilePartUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?\Oceanengine\FormFileInfo $file = null;
    private ?int $isFinished = null;
    private ?int $partNum = null;
    private ?string $fileKey = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAudienceFilePartUploadV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function file(\Oceanengine\FormFileInfo $file): self
    {
        $this->file = $file;
        return $this;
    }

    public function isFinished(int $isFinished): self
    {
        $this->isFinished = $isFinished;
        return $this;
    }

    public function partNum(int $partNum): self
    {
        $this->partNum = $partNum;
        return $this;
    }

    public function fileKey(string $fileKey): self
    {
        $this->fileKey = $fileKey;
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
     * https://bytedance.feishu.cn/wiki/wikcnBy344NTluLkMQ9anjV5nff
     */
    public function execute(): \Oceanengine\Models\QianchuanAudienceFilePartUploadV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->file === null) {
            throw new \InvalidArgumentException('file is required and must be specified');
        }
        if ($this->isFinished === null) {
            throw new \InvalidArgumentException('isFinished is required and must be specified');
        }
        if ($this->isFinished < 0) {
            throw new \InvalidArgumentException('isFinished must be greater than 0');
        }
        if ($this->isFinished > 1) {
            throw new \InvalidArgumentException('isFinished must be less than 1');
        }
        if ($this->partNum === null) {
            throw new \InvalidArgumentException('partNum is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        if ($this->file !== null) {
            $files['file'] = $this->file;
        }
        if ($this->fileKey !== null) {
            $formParams['file_key'] = $this->fileKey;
        }
        $formParams['is_finished'] = $this->isFinished;
        $formParams['part_num'] = $this->partNum;
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/audience_file/part_upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAudienceFilePartUploadV10Response::class);

        return $result['model'];
    }
}
