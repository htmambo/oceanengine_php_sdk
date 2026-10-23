<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectUpdateV30RequestInternalAdvertiserInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertisingVolume = null;

    /**
     * @var string
     */
    protected ?string $innerProjectId = null;

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
     * @return string
     */
    public function getInnerProjectId(): ?string
    {
        return $this->innerProjectId;
    }

    /**
     * @param string $innerProjectId
     * @return self
     */
    public function setInnerProjectId(?string $innerProjectId): self
    {
        $this->innerProjectId = $innerProjectId;
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
        if ($this->innerProjectId !== null) {
            $result['inner_project_id'] = $this->innerProjectId;
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
        if (($v = $data['inner_project_id'] ?? null) !== null) {
            $obj->innerProjectId = (string) $v;
        }
        if (($v = $data['item_number'] ?? null) !== null) {
            $obj->itemNumber = (string) $v;
        }
        return $obj;
    }
}
