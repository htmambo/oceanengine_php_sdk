<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanLqAdGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanLqAdGetV10FilteringMarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @return \Oceanengine\Models\QianchuanLqAdGetV10FilteringMarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanLqAdGetV10FilteringMarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->marketingScene !== null) {
            $result['marketing_scene'] = $this->marketingScene;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['marketing_scene'] ?? null) !== null) {
            $obj->marketingScene = (string) $v;
        }
        return $obj;
    }
}
