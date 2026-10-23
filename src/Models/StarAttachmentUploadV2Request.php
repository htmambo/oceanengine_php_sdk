<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarAttachmentUploadV2Request implements \JsonSerializable
{
    /**
     * 上传的文件
     * @var mixed
     */
    protected $file = null;

    /**
     * 文件名
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 上传的文件
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * 上传的文件
     * @param mixed $file
     * @return self
     */
    public function setFile($file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * 文件名
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 文件名
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 星图客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 星图客户ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->file !== null) {
            $result['file'] = $this->file;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file'] ?? null) !== null) {
            $obj->file = $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
