<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetCommonAuthorPackageListV2ResponseDataPacksInner implements \JsonSerializable
{
    /**
     * 人群包ID
     * @var int
     */
    protected ?int $packId = null;

    /**
     * 人群包名称
     * @var string
     */
    protected ?string $packName = null;

    /**
     * 人群包ID
     * @return int
     */
    public function getPackId(): ?int
    {
        return $this->packId;
    }

    /**
     * 人群包ID
     * @param int $packId
     * @return self
     */
    public function setPackId(?int $packId): self
    {
        $this->packId = $packId;
        return $this;
    }

    /**
     * 人群包名称
     * @return string
     */
    public function getPackName(): ?string
    {
        return $this->packName;
    }

    /**
     * 人群包名称
     * @param string $packName
     * @return self
     */
    public function setPackName(?string $packName): self
    {
        $this->packName = $packName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->packId !== null) {
            $result['pack_id'] = $this->packId;
        }
        if ($this->packName !== null) {
            $result['pack_name'] = $this->packName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['pack_id'] ?? null) !== null) {
            $obj->packId = (int) $v;
        }
        if (($v = $data['pack_name'] ?? null) !== null) {
            $obj->packName = (string) $v;
        }
        return $obj;
    }
}
