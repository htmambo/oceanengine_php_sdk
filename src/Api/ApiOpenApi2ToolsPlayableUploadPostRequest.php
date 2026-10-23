<?php

/**
 * 本文件由 go2php 生成，源: api_tools_playable_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 试玩素材上传，首先调用playable/upload/进行素材包上传，然后调用playable/validate/进行素材上传结果校验，若审核通过，即可调用playable/save/完成素材上传。
 */
class ApiOpenApi2ToolsPlayableUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var \Oceanengine\FormFileInfo 试玩素材文件 【格式说明】： 1.格式为zip，大小不超过3M 2.已接入穿山甲JS-SDK，并且调用方式为window.openAppStore(); 3.主html文件需命名为index，且位于一级目录中 4.试玩广告播放方向字段应存储于config.json文件中，位于一级目录中，取值为0,1,2 5.文件名称仅支持大小写字母、数字、减号和下划线 6.素材中不允许使用 mraid.js 格式 7.素材不允许通过外部网络加载动态素材 8.素材中不允许包含JS 重定向 9.素材不允许发出 HTTP 请求 10.素材中不允许存在内容为空的文件 */
    private ?\Oceanengine\FormFileInfo $playablePackage = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPlayableUploadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 试玩素材文件 【格式说明】： 1.格式为zip，大小不超过3M 2.已接入穿山甲JS-SDK，并且调用方式为window.openAppStore(); 3.主html文件需命名为index，且位于一级目录中 4.试玩广告播放方向字段应存储于config.json文件中，位于一级目录中，取值为0,1,2 5.文件名称仅支持大小写字母、数字、减号和下划线 6.素材中不允许使用 mraid.js 格式 7.素材不允许通过外部网络加载动态素材 8.素材中不允许包含JS 重定向 9.素材不允许发出 HTTP 请求 10.素材中不允许存在内容为空的文件
     */
    public function playablePackage(\Oceanengine\FormFileInfo $playablePackage): self
    {
        $this->playablePackage = $playablePackage;
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
     * 试玩素材上传，首先调用playable/upload/进行素材包上传，然后调用playable/validate/进行素材上传结果校验，若审核通过，即可调用playable/save/完成素材上传。
     */
    public function execute(): \Oceanengine\Models\ToolsPlayableUploadV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->playablePackage === null) {
            throw new \InvalidArgumentException('playablePackage is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['advertiser_id'] = $this->advertiserId;
        if ($this->playablePackage !== null) {
            $files['playable_package'] = $this->playablePackage;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/playable/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPlayableUploadV2Response::class);

        return $result['model'];
    }
}
