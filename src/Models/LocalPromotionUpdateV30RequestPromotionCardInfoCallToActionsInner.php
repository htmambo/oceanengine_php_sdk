<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionUpdateV30RequestPromotionCardInfoCallToActionsInner implements \JsonSerializable
{
    /**
     * 号召描述
     * @var string
     */
    protected ?string $action = null;

    /**
     * 号召描述
     * @return string
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * 号召描述
     * @param string $action
     * @return self
     */
    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action'] ?? null) !== null) {
            $obj->action = (string) $v;
        }
        return $obj;
    }
}
