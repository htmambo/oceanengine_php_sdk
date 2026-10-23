<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileAudioGetV2Filtering implements \JsonSerializable
{
    /**
     * 按音频id过滤，list长度 1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @var string[]
     */
    protected ?array $audioIds = null;

    /**
     * 根据音频上传时间过滤，与start_time搭配使用，格式：yyyy-mm-dd hh:mm:ss
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 按音频素材id（全局唯一）过滤，list长度1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 按音频md5过滤，list长度1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @var string[]
     */
    protected ?array $signatures = null;

    /**
     * 音频素材来源 枚举值大小写敏感，请严格按照定义的名称传参 AD_SITE  AD后台本地上传 OPEN_API 开放平台上传 TTS_TEXT_TO_AUDIO文本转音频
     * @var \Oceanengine\Models\FileAudioGetV2FilteringSources[]
     */
    protected ?array $sources = null;

    /**
     * 根据音频上传时间过滤，与end_time搭配使用，格式：yyyy-mm-dd hh:mm:ss
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 按音频id过滤，list长度 1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @return string[]
     */
    public function getAudioIds(): ?array
    {
        return $this->audioIds;
    }

    /**
     * 按音频id过滤，list长度 1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @param string[] $audioIds
     * @return self
     */
    public function setAudioIds(?array $audioIds): self
    {
        $this->audioIds = $audioIds;
        return $this;
    }

    /**
     * 根据音频上传时间过滤，与start_time搭配使用，格式：yyyy-mm-dd hh:mm:ss
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 根据音频上传时间过滤，与start_time搭配使用，格式：yyyy-mm-dd hh:mm:ss
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 按音频素材id（全局唯一）过滤，list长度1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 按音频素材id（全局唯一）过滤，list长度1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 按音频md5过滤，list长度1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @return string[]
     */
    public function getSignatures(): ?array
    {
        return $this->signatures;
    }

    /**
     * 按音频md5过滤，list长度1-100 注意audio_ids，material_ids，audio_signatures三者只能选一个过滤，同时传入会报错
     * @param string[] $signatures
     * @return self
     */
    public function setSignatures(?array $signatures): self
    {
        $this->signatures = $signatures;
        return $this;
    }

    /**
     * 音频素材来源 枚举值大小写敏感，请严格按照定义的名称传参 AD_SITE  AD后台本地上传 OPEN_API 开放平台上传 TTS_TEXT_TO_AUDIO文本转音频
     * @return \Oceanengine\Models\FileAudioGetV2FilteringSources[]
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }

    /**
     * 音频素材来源 枚举值大小写敏感，请严格按照定义的名称传参 AD_SITE  AD后台本地上传 OPEN_API 开放平台上传 TTS_TEXT_TO_AUDIO文本转音频
     * @param \Oceanengine\Models\FileAudioGetV2FilteringSources[] $sources
     * @return self
     */
    public function setSources(?array $sources): self
    {
        $this->sources = $sources;
        return $this;
    }

    /**
     * 根据音频上传时间过滤，与end_time搭配使用，格式：yyyy-mm-dd hh:mm:ss
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 根据音频上传时间过滤，与end_time搭配使用，格式：yyyy-mm-dd hh:mm:ss
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audioIds !== null) {
            $result['audio_ids'] = $this->audioIds;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->signatures !== null) {
            $result['signatures'] = $this->signatures;
        }
        if ($this->sources !== null) {
            $result['sources'] = $this->sources;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio_ids'] ?? null) !== null && is_array($v)) {
            $obj->audioIds = $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['signatures'] ?? null) !== null && is_array($v)) {
            $obj->signatures = $v;
        }
        if (($v = $data['sources'] ?? null) !== null && is_array($v)) {
            $obj->sources = $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
