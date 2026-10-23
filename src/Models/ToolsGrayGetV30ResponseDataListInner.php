<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsGrayGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $grayKey = null;

    /**
     * @var int
     */
    protected ?int $inWhitelist = null;

    /**
     * @return string
     */
    public function getGrayKey(): ?string
    {
        return $this->grayKey;
    }

    /**
     * @param string $grayKey
     * @return self
     */
    public function setGrayKey(?string $grayKey): self
    {
        $this->grayKey = $grayKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getInWhitelist(): ?int
    {
        return $this->inWhitelist;
    }

    /**
     * @param int $inWhitelist
     * @return self
     */
    public function setInWhitelist(?int $inWhitelist): self
    {
        $this->inWhitelist = $inWhitelist;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->grayKey !== null) {
            $result['gray_key'] = $this->grayKey;
        }
        if ($this->inWhitelist !== null) {
            $result['in_whitelist'] = $this->inWhitelist;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['gray_key'] ?? null) !== null) {
            $obj->grayKey = (string) $v;
        }
        if (($v = $data['in_whitelist'] ?? null) !== null) {
            $obj->inWhitelist = (int) $v;
        }
        return $obj;
    }
}
