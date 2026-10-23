<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCouponCreateV2RequestCouponResourceListInnerGiftListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $count = null;

    /**
     * @var string
     */
    protected ?string $iconUrl = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return self
     */
    public function setCount(?int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl(): ?string
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     * @return self
     */
    public function setIconUrl(?string $iconUrl): self
    {
        $this->iconUrl = $iconUrl;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->iconUrl !== null) {
            $result['icon_url'] = $this->iconUrl;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['count'] ?? null) !== null) {
            $obj->count = (int) $v;
        }
        if (($v = $data['icon_url'] ?? null) !== null) {
            $obj->iconUrl = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
