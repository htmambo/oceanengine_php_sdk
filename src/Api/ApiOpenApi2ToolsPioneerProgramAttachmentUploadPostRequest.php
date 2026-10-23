<?php

/**
 * 本文件由 go2php 生成，源: api_tools_pioneer_program_attachment_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 上传先锋计划数据
 */
class ApiOpenApi2ToolsPioneerProgramAttachmentUploadPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 即应用ID，开发者创建应用的唯一标识，可通过应用管理查看 */
    private ?int $appId = null;
    private ?string $dataFileType = null;
    /** @var \Oceanengine\FormFileInfo 文件数据，binary格式 */
    private ?\Oceanengine\FormFileInfo $fileData = null;
    /** @var int 当前文件序号，从1开始，最大值为file_total_num */
    private ?int $fileIndex = null;
    /** @var int p_date - platform - data_file_type维度下总文件数，如“2022-06-12”日“巨量引擎”平台的“后端投放数据”共计3份，则file_total_num为3 */
    private ?int $fileTotalNum = null;
    /** @var string 数据日期，格式为yyyy-MM-dd */
    private ?string $pDate = null;
    private ?string $platform = null;
    /** @var bool 是否为调试模式，调试模式下数据不会被最终记录，默认为False */
    private ?bool $debugMode = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsPioneerProgramAttachmentUploadV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 即应用ID，开发者创建应用的唯一标识，可通过应用管理查看
     */
    public function appId(int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function dataFileType(string $dataFileType): self
    {
        $this->dataFileType = $dataFileType;
        return $this;
    }

    /**
     * 文件数据，binary格式
     */
    public function fileData(\Oceanengine\FormFileInfo $fileData): self
    {
        $this->fileData = $fileData;
        return $this;
    }

    /**
     * 当前文件序号，从1开始，最大值为file_total_num
     */
    public function fileIndex(int $fileIndex): self
    {
        $this->fileIndex = $fileIndex;
        return $this;
    }

    /**
     * p_date - platform - data_file_type维度下总文件数，如“2022-06-12”日“巨量引擎”平台的“后端投放数据”共计3份，则file_total_num为3
     */
    public function fileTotalNum(int $fileTotalNum): self
    {
        $this->fileTotalNum = $fileTotalNum;
        return $this;
    }

    /**
     * 数据日期，格式为yyyy-MM-dd
     */
    public function pDate(string $pDate): self
    {
        $this->pDate = $pDate;
        return $this;
    }

    public function platform(string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 是否为调试模式，调试模式下数据不会被最终记录，默认为False
     */
    public function debugMode(bool $debugMode): self
    {
        $this->debugMode = $debugMode;
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
     * 上传先锋计划数据
     */
    public function execute(): \Oceanengine\Models\ToolsPioneerProgramAttachmentUploadV2Response
    {
        if ($this->appId === null) {
            throw new \InvalidArgumentException('appId is required and must be specified');
        }
        if ($this->dataFileType === null) {
            throw new \InvalidArgumentException('dataFileType is required and must be specified');
        }
        if ($this->fileData === null) {
            throw new \InvalidArgumentException('fileData is required and must be specified');
        }
        if ($this->fileIndex === null) {
            throw new \InvalidArgumentException('fileIndex is required and must be specified');
        }
        if ($this->fileTotalNum === null) {
            throw new \InvalidArgumentException('fileTotalNum is required and must be specified');
        }
        if ($this->pDate === null) {
            throw new \InvalidArgumentException('pDate is required and must be specified');
        }
        if ($this->platform === null) {
            throw new \InvalidArgumentException('platform is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $formParams['app_id'] = $this->appId;
        $formParams['data_file_type'] = $this->dataFileType;
        if ($this->debugMode !== null) {
            $formParams['debug_mode'] = $this->debugMode;
        }
        if ($this->fileData !== null) {
            $files['file_data'] = $this->fileData;
        }
        $formParams['file_index'] = $this->fileIndex;
        $formParams['file_total_num'] = $this->fileTotalNum;
        $formParams['p_date'] = $this->pDate;
        $formParams['platform'] = $this->platform;
        $body = $formParams === [] ? null : json_encode($formParams);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/pioneer_program/attachment/upload/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsPioneerProgramAttachmentUploadV2Response::class);

        return $result['model'];
    }
}
