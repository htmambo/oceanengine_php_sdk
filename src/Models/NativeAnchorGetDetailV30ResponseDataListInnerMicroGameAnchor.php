<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerMicroGameAnchor implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $microGameAppId = null;

    /**
     * @return string
     */
    public function getMicroGameAppId(): ?string
    {
        return $this->microGameAppId;
    }

    /**
     * @param string $microGameAppId
     * @return self
     */
    public function setMicroGameAppId(?string $microGameAppId): self
    {
        $this->microGameAppId = $microGameAppId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->microGameAppId !== null) {
            $result['micro_game_app_id'] = $this->microGameAppId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['micro_game_app_id'] ?? null) !== null) {
            $obj->microGameAppId = (string) $v;
        }
        return $obj;
    }
}
