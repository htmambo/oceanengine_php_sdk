<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeInteractiveModule implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode
     */
    protected ?string $creativeInteractiveMode = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode
     */
    public function getCreativeInteractiveMode(): ?string
    {
        return $this->creativeInteractiveMode;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode $creativeInteractiveMode
     * @return self
     */
    public function setCreativeInteractiveMode(?string $creativeInteractiveMode): self
    {
        $this->creativeInteractiveMode = $creativeInteractiveMode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeInteractiveMode !== null) {
            $result['creative_interactive_mode'] = $this->creativeInteractiveMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_interactive_mode'] ?? null) !== null) {
            $obj->creativeInteractiveMode = (string) $v;
        }
        return $obj;
    }
}
