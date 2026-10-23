<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentSplashButtonColor implements \JsonSerializable
{
    /**
     * 按钮颜色
     * @var string
     */
    protected ?string $splashButtonColor = null;

    /**
     * 按钮颜色
     * @return string
     */
    public function getSplashButtonColor(): ?string
    {
        return $this->splashButtonColor;
    }

    /**
     * 按钮颜色
     * @param string $splashButtonColor
     * @return self
     */
    public function setSplashButtonColor(?string $splashButtonColor): self
    {
        $this->splashButtonColor = $splashButtonColor;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->splashButtonColor !== null) {
            $result['splash_button_color'] = $this->splashButtonColor;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['splash_button_color'] ?? null) !== null) {
            $obj->splashButtonColor = (string) $v;
        }
        return $obj;
    }
}
