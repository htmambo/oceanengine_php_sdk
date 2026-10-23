<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OpenMaterialAuditProGetV30ResponseDataInput implements \JsonSerializable
{
    /**
     * 某个片源ID的转码产物ID，type为FileId时必传
     * @var string
     */
    protected ?string $fileId = null;

    /**
     * @var \Oceanengine\Models\OpenMaterialAuditProGetV30DataInputType
     */
    protected ?string $type = null;

    /**
     * 片源视频ID, type为Vid和FileId时必传
     * @var string
     */
    protected ?string $vid = null;

    /**
     * 某个片源ID的转码产物ID，type为FileId时必传
     * @return string
     */
    public function getFileId(): ?string
    {
        return $this->fileId;
    }

    /**
     * 某个片源ID的转码产物ID，type为FileId时必传
     * @param string $fileId
     * @return self
     */
    public function setFileId(?string $fileId): self
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OpenMaterialAuditProGetV30DataInputType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\OpenMaterialAuditProGetV30DataInputType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * 片源视频ID, type为Vid和FileId时必传
     * @return string
     */
    public function getVid(): ?string
    {
        return $this->vid;
    }

    /**
     * 片源视频ID, type为Vid和FileId时必传
     * @param string $vid
     * @return self
     */
    public function setVid(?string $vid): self
    {
        $this->vid = $vid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fileId !== null) {
            $result['file_id'] = $this->fileId;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->vid !== null) {
            $result['vid'] = $this->vid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file_id'] ?? null) !== null) {
            $obj->fileId = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['vid'] ?? null) !== null) {
            $obj->vid = (string) $v;
        }
        return $obj;
    }
}
