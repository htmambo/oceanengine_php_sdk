<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileAudioAdV2ResponseDataAudioInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $audioId = null;

    /**
     * @var string
     */
    protected ?string $audioSignature = null;

    /**
     * @var string
     */
    protected ?string $audioUrl = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @return string
     */
    public function getAudioId(): ?string
    {
        return $this->audioId;
    }

    /**
     * @param string $audioId
     * @return self
     */
    public function setAudioId(?string $audioId): self
    {
        $this->audioId = $audioId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudioSignature(): ?string
    {
        return $this->audioSignature;
    }

    /**
     * @param string $audioSignature
     * @return self
     */
    public function setAudioSignature(?string $audioSignature): self
    {
        $this->audioSignature = $audioSignature;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudioUrl(): ?string
    {
        return $this->audioUrl;
    }

    /**
     * @param string $audioUrl
     * @return self
     */
    public function setAudioUrl(?string $audioUrl): self
    {
        $this->audioUrl = $audioUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
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
        if ($this->audioSignature !== null) {
            $result['audio_signature'] = $this->audioSignature;
        }
        if ($this->audioUrl !== null) {
            $result['audio_url'] = $this->audioUrl;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audio_id'] ?? null) !== null) {
            $obj->audioId = (string) $v;
        }
        if (($v = $data['audio_signature'] ?? null) !== null) {
            $obj->audioSignature = (string) $v;
        }
        if (($v = $data['audio_url'] ?? null) !== null) {
            $obj->audioUrl = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
