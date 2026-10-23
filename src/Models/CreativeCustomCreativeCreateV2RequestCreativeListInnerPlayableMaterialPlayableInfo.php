<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerPlayableMaterialPlayableInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->playableUrl !== null) {
            $result['playable_url'] = $this->playableUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['playable_url'] ?? null) !== null) {
            $obj->playableUrl = (string) $v;
        }
        return $obj;
    }
}
