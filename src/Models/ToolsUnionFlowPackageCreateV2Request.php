<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackageCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int[]
     */
    protected ?array $rit = null;

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
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRit(): ?array
    {
        return $this->rit;
    }

    /**
     * @param int[] $rit
     * @return self
     */
    public function setRit(?array $rit): self
    {
        $this->rit = $rit;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->rit !== null) {
            $result['rit'] = $this->rit;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['rit'] ?? null) !== null && is_array($v)) {
            $obj->rit = $v;
        }
        return $obj;
    }
}
