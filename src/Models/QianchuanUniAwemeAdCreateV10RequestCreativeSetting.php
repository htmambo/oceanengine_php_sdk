<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAdCreateV10RequestCreativeSetting implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $hideInAweme = null;

    /**
     * @var bool
     */
    protected ?bool $smartSelectMaterial = null;

    /**
     * @return bool
     */
    public function getHideInAweme(): ?bool
    {
        return $this->hideInAweme;
    }

    /**
     * @param bool $hideInAweme
     * @return self
     */
    public function setHideInAweme(?bool $hideInAweme): self
    {
        $this->hideInAweme = $hideInAweme;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSmartSelectMaterial(): ?bool
    {
        return $this->smartSelectMaterial;
    }

    /**
     * @param bool $smartSelectMaterial
     * @return self
     */
    public function setSmartSelectMaterial(?bool $smartSelectMaterial): self
    {
        $this->smartSelectMaterial = $smartSelectMaterial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->hideInAweme !== null) {
            $result['hide_in_aweme'] = $this->hideInAweme;
        }
        if ($this->smartSelectMaterial !== null) {
            $result['smart_select_material'] = $this->smartSelectMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['hide_in_aweme'] ?? null) !== null) {
            $obj->hideInAweme = (bool) $v;
        }
        if (($v = $data['smart_select_material'] ?? null) !== null) {
            $obj->smartSelectMaterial = (bool) $v;
        }
        return $obj;
    }
}
