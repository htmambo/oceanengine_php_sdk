<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectCreateV30RequestProjectMaterialsInstantPlayMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appPlayUri = null;

    /**
     * @return string
     */
    public function getAppPlayUri(): ?string
    {
        return $this->appPlayUri;
    }

    /**
     * @param string $appPlayUri
     * @return self
     */
    public function setAppPlayUri(?string $appPlayUri): self
    {
        $this->appPlayUri = $appPlayUri;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appPlayUri !== null) {
            $result['app_play_uri'] = $this->appPlayUri;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_play_uri'] ?? null) !== null) {
            $obj->appPlayUri = (string) $v;
        }
        return $obj;
    }
}
