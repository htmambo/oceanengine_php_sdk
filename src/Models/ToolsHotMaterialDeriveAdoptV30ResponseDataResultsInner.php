<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInnerMaterialInfo
     */
    protected ?\Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInnerMaterialInfo $materialInfo = null;

    /**
     * @var int
     */
    protected ?int $statusCode = null;

    /**
     * @var string
     */
    protected ?string $statusMessage = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInnerMaterialInfo
     */
    public function getMaterialInfo(): ?\Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInnerMaterialInfo
    {
        return $this->materialInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInnerMaterialInfo $materialInfo
     * @return self
     */
    public function setMaterialInfo(?\Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInnerMaterialInfo $materialInfo): self
    {
        $this->materialInfo = $materialInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return self
     */
    public function setStatusCode(?int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage(): ?string
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return self
     */
    public function setStatusMessage(?string $statusMessage): self
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialInfo !== null) {
            $result['material_info'] = $this->materialInfo;
        }
        if ($this->statusCode !== null) {
            $result['status_code'] = $this->statusCode;
        }
        if ($this->statusMessage !== null) {
            $result['status_message'] = $this->statusMessage;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_info'] ?? null) !== null && is_array($v)) {
            $obj->materialInfo = \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInnerMaterialInfo::fromArray($v);
        }
        if (($v = $data['status_code'] ?? null) !== null) {
            $obj->statusCode = (int) $v;
        }
        if (($v = $data['status_message'] ?? null) !== null) {
            $obj->statusMessage = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
