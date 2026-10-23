<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoUploadV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpVideoUploadV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 视频素材是否为AIGC生成
     * @var bool
     */
    protected ?bool $isAigc = null;

    /**
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpVideoUploadV30UploadType
     */
    protected ?string $uploadType = null;

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填
     * @var mixed
     */
    protected $videoFile = null;

    /**
     * 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填
     * @var string
     */
    protected ?string $videoSignature = null;

    /**
     * 视频url地址 仅支持开发者购置连山云素材服务上传生成的tos链接上传，不支持其他三方链接地址
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpVideoUploadV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpVideoUploadV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 视频素材是否为AIGC生成
     * @return bool
     */
    public function getIsAigc(): ?bool
    {
        return $this->isAigc;
    }

    /**
     * 视频素材是否为AIGC生成
     * @param bool $isAigc
     * @return self
     */
    public function setIsAigc(?bool $isAigc): self
    {
        $this->isAigc = $isAigc;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpVideoUploadV30UploadType
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpVideoUploadV30UploadType $uploadType
     * @return self
     */
    public function setUploadType(?string $uploadType): self
    {
        $this->uploadType = $uploadType;
        return $this;
    }

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填
     * @return mixed
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填
     * @param mixed $videoFile
     * @return self
     */
    public function setVideoFile($videoFile): self
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填
     * @return string
     */
    public function getVideoSignature(): ?string
    {
        return $this->videoSignature;
    }

    /**
     * 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填
     * @param string $videoSignature
     * @return self
     */
    public function setVideoSignature(?string $videoSignature): self
    {
        $this->videoSignature = $videoSignature;
        return $this;
    }

    /**
     * 视频url地址 仅支持开发者购置连山云素材服务上传生成的tos链接上传，不支持其他三方链接地址
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频url地址 仅支持开发者购置连山云素材服务上传生成的tos链接上传，不支持其他三方链接地址
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->isAigc !== null) {
            $result['is_aigc'] = $this->isAigc;
        }
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->uploadType !== null) {
            $result['upload_type'] = $this->uploadType;
        }
        if ($this->videoFile !== null) {
            $result['video_file'] = $this->videoFile;
        }
        if ($this->videoSignature !== null) {
            $result['video_signature'] = $this->videoSignature;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['is_aigc'] ?? null) !== null) {
            $obj->isAigc = (bool) $v;
        }
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['upload_type'] ?? null) !== null) {
            $obj->uploadType = (string) $v;
        }
        if (($v = $data['video_file'] ?? null) !== null) {
            $obj->videoFile = $v;
        }
        if (($v = $data['video_signature'] ?? null) !== null) {
            $obj->videoSignature = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
