<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePreauditGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $errmsg = null;

    /**
     * @var \Oceanengine\Models\FilePreauditGetV30DataListMaterialChannel
     */
    protected ?string $materialChannel = null;

    /**
     * @var \Oceanengine\Models\FilePreauditGetV30DataListMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var int
     */
    protected ?int $preauditId = null;

    /**
     * @var \Oceanengine\Models\FilePreauditGetV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * @return string
     */
    public function getErrmsg(): ?string
    {
        return $this->errmsg;
    }

    /**
     * @param string $errmsg
     * @return self
     */
    public function setErrmsg(?string $errmsg): self
    {
        $this->errmsg = $errmsg;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePreauditGetV30DataListMaterialChannel
     */
    public function getMaterialChannel(): ?string
    {
        return $this->materialChannel;
    }

    /**
     * @param \Oceanengine\Models\FilePreauditGetV30DataListMaterialChannel $materialChannel
     * @return self
     */
    public function setMaterialChannel(?string $materialChannel): self
    {
        $this->materialChannel = $materialChannel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePreauditGetV30DataListMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\FilePreauditGetV30DataListMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreauditId(): ?int
    {
        return $this->preauditId;
    }

    /**
     * @param int $preauditId
     * @return self
     */
    public function setPreauditId(?int $preauditId): self
    {
        $this->preauditId = $preauditId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePreauditGetV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\FilePreauditGetV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
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
        if ($this->errmsg !== null) {
            $result['errmsg'] = $this->errmsg;
        }
        if ($this->materialChannel !== null) {
            $result['material_channel'] = $this->materialChannel;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->preauditId !== null) {
            $result['preaudit_id'] = $this->preauditId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errmsg'] ?? null) !== null) {
            $obj->errmsg = (string) $v;
        }
        if (($v = $data['material_channel'] ?? null) !== null) {
            $obj->materialChannel = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['preaudit_id'] ?? null) !== null) {
            $obj->preauditId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
