<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoAgentV2Request implements \JsonSerializable
{
    /**
     * 代理商id
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 视频上传名称
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 标注是否为AIGC生成,默认false
     * @var bool
     */
    protected ?bool $isAigc = null;

    /**
     * 标注是否允许授权(素材搬运)，目前只支持true
     * @var bool
     */
    protected ?bool $isNeedAuth = null;

    /**
     * @var \Oceanengine\Models\FileVideoAgentV2UploadType
     */
    protected ?string $uploadType = null;

    /**
     * 文件数据
     * @var mixed
     */
    protected $videoFile = null;

    /**
     * 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填
     * @var string
     */
    protected ?string $videoSignature = null;

    /**
     * 视频URL地址，upload_type为UPLOAD_BY_URL必传 只支持连山tos地址
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 代理商id
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商id
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 视频上传名称
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 视频上传名称
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 标注是否为AIGC生成,默认false
     * @return bool
     */
    public function getIsAigc(): ?bool
    {
        return $this->isAigc;
    }

    /**
     * 标注是否为AIGC生成,默认false
     * @param bool $isAigc
     * @return self
     */
    public function setIsAigc(?bool $isAigc): self
    {
        $this->isAigc = $isAigc;
        return $this;
    }

    /**
     * 标注是否允许授权(素材搬运)，目前只支持true
     * @return bool
     */
    public function getIsNeedAuth(): ?bool
    {
        return $this->isNeedAuth;
    }

    /**
     * 标注是否允许授权(素材搬运)，目前只支持true
     * @param bool $isNeedAuth
     * @return self
     */
    public function setIsNeedAuth(?bool $isNeedAuth): self
    {
        $this->isNeedAuth = $isNeedAuth;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoAgentV2UploadType
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * @param \Oceanengine\Models\FileVideoAgentV2UploadType $uploadType
     * @return self
     */
    public function setUploadType(?string $uploadType): self
    {
        $this->uploadType = $uploadType;
        return $this;
    }

    /**
     * 文件数据
     * @return mixed
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * 文件数据
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
     * 视频URL地址，upload_type为UPLOAD_BY_URL必传 只支持连山tos地址
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频URL地址，upload_type为UPLOAD_BY_URL必传 只支持连山tos地址
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
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->isAigc !== null) {
            $result['is_aigc'] = $this->isAigc;
        }
        if ($this->isNeedAuth !== null) {
            $result['is_need_auth'] = $this->isNeedAuth;
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
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['is_aigc'] ?? null) !== null) {
            $obj->isAigc = (bool) $v;
        }
        if (($v = $data['is_need_auth'] ?? null) !== null) {
            $obj->isNeedAuth = (bool) $v;
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
