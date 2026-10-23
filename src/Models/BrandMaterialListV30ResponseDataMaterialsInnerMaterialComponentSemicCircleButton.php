<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentSemicCircleButton implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $splashActivityTime = null;

    /**
     * @var string
     */
    protected ?string $splashButtonText = null;

    /**
     * @return string
     */
    public function getSplashActivityTime(): ?string
    {
        return $this->splashActivityTime;
    }

    /**
     * @param string $splashActivityTime
     * @return self
     */
    public function setSplashActivityTime(?string $splashActivityTime): self
    {
        $this->splashActivityTime = $splashActivityTime;
        return $this;
    }

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
        if ($this->splashActivityTime !== null) {
            $result['splash_activity_time'] = $this->splashActivityTime;
        }
        if ($this->splashButtonText !== null) {
            $result['splash_button_text'] = $this->splashButtonText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['splash_activity_time'] ?? null) !== null) {
            $obj->splashActivityTime = (string) $v;
        }
        if (($v = $data['splash_button_text'] ?? null) !== null) {
            $obj->splashButtonText = (string) $v;
        }
        return $obj;
    }
}
