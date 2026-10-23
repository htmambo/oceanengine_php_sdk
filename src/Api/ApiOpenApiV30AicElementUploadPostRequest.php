<?php

/**
 * 本文件由 go2php 生成，源: api_aic_element_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 通过此接口可以上传原料到即创原料库
 */
class ApiOpenApiV30AicElementUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int BP账户体系:组织id，Agent账户体系:代理商id */
    private ?int $accountId = null;
    private ?string $accountType = null;
    private ?string $elementType = null;
    /** @var string 元素名称，支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50 */
    private ?string $elementName = null;
    /** @var \Oceanengine\FormFileInfo 上传二进制数据，如果在相同的路径下有相同的视频即为更新， 视频数据：支持mp4、mpeg、mov，单视频时长不超过10min，大小＜500M, 图片数据：jpg、jpeg、png、webp、bmp，大小&lt;150MB 字体数据：ttf格式，大小&lt;150MB 音乐数据：mp3、wav、flac、aac，大小&lt;150MB,时长不超过5min */
    private ?\Oceanengine\FormFileInfo $file = null;
    /** @var string 元素存储的文件夹路径，确保输入路径存在 示例：/数码/电脑 层级：2，最大层级限制：10，默认根目录 */
    private ?string $pathName = null;
    private ?string $useAs = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AicElementUploadV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * BP账户体系:组织id，Agent账户体系:代理商id
     */
    public function accountId(int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function accountType(string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function elementType(string $elementType): self
    {
        $this->elementType = $elementType;
        return $this;
    }

    /**
     * 元素名称，支持中英文、数字、特殊字符，默认剔除html标签，字数限制：50
     */
    public function elementName(string $elementName): self
    {
        $this->elementName = $elementName;
        return $this;
    }

    /**
     * 上传二进制数据，如果在相同的路径下有相同的视频即为更新， 视频数据：支持mp4、mpeg、mov，单视频时长不超过10min，大小＜500M, 图片数据：jpg、jpeg、png、webp、bmp，大小&lt;150MB 字体数据：ttf格式，大小&lt;150MB 音乐数据：mp3、wav、flac、aac，大小&lt;150MB,时长不超过5min
     */
    public function file(\Oceanengine\FormFileInfo $file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * 元素存储的文件夹路径，确保输入路径存在 示例：/数码/电脑 层级：2，最大层级限制：10，默认根目录
     */
    public function pathName(string $pathName): self
    {
        $this->pathName = $pathName;
        return $this;
    }

    public function useAs(string $useAs): self
    {
        $this->useAs = $useAs;
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
     * 通过此接口可以上传原料到即创原料库
     */
    public function execute(): \Oceanengine\Models\AicElementUploadV30Response
    {
        if ($this->accountId === null) {
            throw new \InvalidArgumentException('accountId is required and must be specified');
        }
        if ($this->accountType === null) {
            throw new \InvalidArgumentException('accountType is required and must be specified');
        }
        if ($this->elementType === null) {
            throw new \InvalidArgumentException('elementType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['account_id'] = $this->accountId;
        $formParams['account_type'] = $this->accountType;
        if ($this->elementName !== null) {
            $formParams['element_name'] = $this->elementName;
        }
        $formParams['element_type'] = $this->elementType;
        if ($this->file !== null) {
            $files['file'] = $this->file;
        }
        if ($this->pathName !== null) {
            $formParams['path_name'] = $this->pathName;
        }
        if ($this->useAs !== null) {
            $formParams['use_as'] = $this->useAs;
        }
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/aic/element/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AicElementUploadV30Response::class);

        return $result['model'];
    }
}
