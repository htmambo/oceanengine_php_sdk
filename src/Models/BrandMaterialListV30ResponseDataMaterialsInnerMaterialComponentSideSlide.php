<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentSideSlide implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $splashButtonText = null;

    /**
     * @return string
     */
    public function getSplashButtonText(): ?string
    {
        return $this->splashButtonText;
    }

    /**
     * @param string $splashButtonText
     * @return self
     */
    public function setSplashButtonText(?string $splashButtonText): self
    {
        $this->splashButtonText = $splashButtonText;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->splashButtonText !== null) {
            $result['splash_button_text'] = $this->splashButtonText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['splash_button_text'] ?? null) !== null) {
            $obj->splashButtonText = (string) $v;
        }
        return $obj;
    }
}
