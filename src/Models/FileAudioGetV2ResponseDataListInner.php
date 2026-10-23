<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileAudioGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 音频id
     * @var string
     */
    protected ?string $audioId = null;

    /**
     * 音频url
     * @var string
     */
    protected ?string $audioUrl = null;

    /**
     * 音频时长
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 音频文件名称
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 音频素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 音频md5值
     * @var string
     */
    protected ?string $signature = null;

    /**
     * @var \Oceanengine\Models\FileAudioGetV2DataListSource
     */
    protected ?string $source = null;

    /**
     * 音频id
     * @return string
     */
    public function getAudioId(): ?string
    {
        return $this->audioId;
    }

    /**
     * 音频id
     * @param string $audioId
     * @return self
     */
    public function setAudioId(?string $audioId): self
    {
        $this->audioId = $audioId;
        return $this;
    }

    /**
     * 音频url
     * @return string
     */
    public function getAudioUrl(): ?string
    {
        return $this->audioUrl;
    }

    /**
     * 音频url
     * @param string $audioUrl
     * @return self
     */
    public function setAudioUrl(?string $audioUrl): self
    {
        $this->audioUrl = $audioUrl;
        return $this;
    }

    /**
     * 音频时长
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 音频时长
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 音频文件名称
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 音频文件名称
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 音频素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 音频素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 音频md5值
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 音频md5值
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileAudioGetV2DataListSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\FileAudioGetV2DataListSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audioId !== null) {
            $result['audio_id'] = $this->audioId;
        }
        if ($this->audioUrl !== null) {
            $result['audio_url'] = $this->audioUrl;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio_id'] ?? null) !== null) {
            $obj->audioId = (string) $v;
        }
        if (($v = $data['audio_url'] ?? null) !== null) {
            $obj->audioUrl = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        return $obj;
    }
}
