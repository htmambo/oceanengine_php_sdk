<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInnerInternalAdvertiserInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertisingVolume = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListInternalAdvertiserInfoClassify
     */
    protected ?string $classify = null;

    /**
     * @var string
     */
    protected ?string $itemNumber = null;

    /**
     * @return int
     */
    public function getAdvertisingVolume(): ?int
    {
        return $this->advertisingVolume;
    }

    /**
     * @param int $advertisingVolume
     * @return self
     */
    public function setAdvertisingVolume(?int $advertisingVolume): self
    {
        $this->advertisingVolume = $advertisingVolume;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListInternalAdvertiserInfoClassify
     */
    public function getClassify(): ?string
    {
        return $this->classify;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListInternalAdvertiserInfoClassify $classify
     * @return self
     */
    public function setClassify(?string $classify): self
    {
        $this->classify = $classify;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemNumber(): ?string
    {
        return $this->itemNumber;
    }

    /**
     * @param string $itemNumber
     * @return self
     */
    public function setItemNumber(?string $itemNumber): self
    {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertisingVolume !== null) {
            $result['advertising_volume'] = $this->advertisingVolume;
        }
        if ($this->classify !== null) {
            $result['classify'] = $this->classify;
        }
        if ($this->itemNumber !== null) {
            $result['item_number'] = $this->itemNumber;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertising_volume'] ?? null) !== null) {
            $obj->advertisingVolume = (int) $v;
        }
        if (($v = $data['classify'] ?? null) !== null) {
            $obj->classify = (string) $v;
        }
        if (($v = $data['item_number'] ?? null) !== null) {
            $obj->itemNumber = (string) $v;
        }
        return $obj;
    }
}
