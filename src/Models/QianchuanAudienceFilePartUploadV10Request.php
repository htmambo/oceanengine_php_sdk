<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceFilePartUploadV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var mixed
     */
    protected $file = null;

    /**
     * @var string
     */
    protected ?string $fileKey = null;

    /**
     * @var int
     */
    protected ?int $isFinished = null;

    /**
     * @var int
     */
    protected ?int $partNum = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     * @return self
     */
    public function setFile($file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileKey(): ?string
    {
        return $this->fileKey;
    }

    /**
     * @param string $fileKey
     * @return self
     */
    public function setFileKey(?string $fileKey): self
    {
        $this->fileKey = $fileKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsFinished(): ?int
    {
        return $this->isFinished;
    }

    /**
     * @param int $isFinished
     * @return self
     */
    public function setIsFinished(?int $isFinished): self
    {
        $this->isFinished = $isFinished;
        return $this;
    }

    /**
     * @return int
     */
    public function getPartNum(): ?int
    {
        return $this->partNum;
    }

    /**
     * @param int $partNum
     * @return self
     */
    public function setPartNum(?int $partNum): self
    {
        $this->partNum = $partNum;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->file !== null) {
            $result['file'] = $this->file;
        }
        if ($this->fileKey !== null) {
            $result['file_key'] = $this->fileKey;
        }
        if ($this->isFinished !== null) {
            $result['is_finished'] = $this->isFinished;
        }
        if ($this->partNum !== null) {
            $result['part_num'] = $this->partNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['file'] ?? null) !== null) {
            $obj->file = $v;
        }
        if (($v = $data['file_key'] ?? null) !== null) {
            $obj->fileKey = (string) $v;
        }
        if (($v = $data['is_finished'] ?? null) !== null) {
            $obj->isFinished = (int) $v;
        }
        if (($v = $data['part_num'] ?? null) !== null) {
            $obj->partNum = (int) $v;
        }
        return $obj;
    }
}
