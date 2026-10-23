<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImUploadImageV30Request implements \JsonSerializable
{
    /**
     * @var mixed
     */
    protected $imageFile = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @return mixed
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param mixed $imageFile
     * @return self
     */
    public function setImageFile($imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageFile !== null) {
            $result['image_file'] = $this->imageFile;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_file'] ?? null) !== null) {
            $obj->imageFile = $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        return $obj;
    }
}
