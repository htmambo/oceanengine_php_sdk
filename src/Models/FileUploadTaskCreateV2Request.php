<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileUploadTaskCreateV2Request implements \JsonSerializable
{
    /**
     * 账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\FileUploadTaskCreateV2AccountType
     */
    protected ?string $accountType = null;

    /**
     * 素材的文件名
     * @var string
     */
    protected ?string $filename = null;

    /**
     * 视频素材是否为AIGC生成
     * @var bool
     */
    protected ?bool $isAigc = null;

    /**
     * 上传视频场景是否是引导视频（此功能仅游戏行业白名单客户可用，如需使用请联系运营） 允许值：FALSE，TRUE
     * @var bool
     */
    protected ?bool $isGuideVideo = null;

    /**
     * 标注是否允许生效授权保护（前提素材需要是自产！！） 目前只支持true   当account_type= AGTENT时，必填
     * @var bool
     */
    protected ?bool $isNeedAuth = null;

    /**
     * 标签
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * 视频 url地址，如http://xxx.xxx
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 账户ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileUploadTaskCreateV2AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\FileUploadTaskCreateV2AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 素材的文件名
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * 素材的文件名
     * @param string $filename
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
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
     * 上传视频场景是否是引导视频（此功能仅游戏行业白名单客户可用，如需使用请联系运营） 允许值：FALSE，TRUE
     * @return bool
     */
    public function getIsGuideVideo(): ?bool
    {
        return $this->isGuideVideo;
    }

    /**
     * 上传视频场景是否是引导视频（此功能仅游戏行业白名单客户可用，如需使用请联系运营） 允许值：FALSE，TRUE
     * @param bool $isGuideVideo
     * @return self
     */
    public function setIsGuideVideo(?bool $isGuideVideo): self
    {
        $this->isGuideVideo = $isGuideVideo;
        return $this;
    }

    /**
     * 标注是否允许生效授权保护（前提素材需要是自产！！） 目前只支持true   当account_type= AGTENT时，必填
     * @return bool
     */
    public function getIsNeedAuth(): ?bool
    {
        return $this->isNeedAuth;
    }

    /**
     * 标注是否允许生效授权保护（前提素材需要是自产！！） 目前只支持true   当account_type= AGTENT时，必填
     * @param bool $isNeedAuth
     * @return self
     */
    public function setIsNeedAuth(?bool $isNeedAuth): self
    {
        $this->isNeedAuth = $isNeedAuth;
        return $this;
    }

    /**
     * 标签
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * 标签
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * 视频 url地址，如http://xxx.xxx
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频 url地址，如http://xxx.xxx
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
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        if ($this->isAigc !== null) {
            $result['is_aigc'] = $this->isAigc;
        }
        if ($this->isGuideVideo !== null) {
            $result['is_guide_video'] = $this->isGuideVideo;
        }
        if ($this->isNeedAuth !== null) {
            $result['is_need_auth'] = $this->isNeedAuth;
        }
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
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
        if (($v = $data['filename'] ?? null) !== null) {
            $obj->filename = (string) $v;
        }
        if (($v = $data['is_aigc'] ?? null) !== null) {
            $obj->isAigc = (bool) $v;
        }
        if (($v = $data['is_guide_video'] ?? null) !== null) {
            $obj->isGuideVideo = (bool) $v;
        }
        if (($v = $data['is_need_auth'] ?? null) !== null) {
            $obj->isNeedAuth = (bool) $v;
        }
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
