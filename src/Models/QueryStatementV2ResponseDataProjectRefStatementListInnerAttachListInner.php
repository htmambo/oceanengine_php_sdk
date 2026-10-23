<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryStatementV2ResponseDataProjectRefStatementListInnerAttachListInner implements \JsonSerializable
{
    /**
     * 附件id
     * @var int
     */
    protected ?int $attachId = null;

    /**
     * 文件名称
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 附件id
     * @return int
     */
    public function getAttachId(): ?int
    {
        return $this->attachId;
    }

    /**
     * 附件id
     * @param int $attachId
     * @return self
     */
    public function setAttachId(?int $attachId): self
    {
        $this->attachId = $attachId;
        return $this;
    }

    /**
     * 文件名称
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 文件名称
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachId !== null) {
            $result['attach_id'] = $this->attachId;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attach_id'] ?? null) !== null) {
            $obj->attachId = (int) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        return $obj;
    }
}
