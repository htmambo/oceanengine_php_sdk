<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeUpdateV2RequestAdDataSupplementsInnerGamesInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $id = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataSupplementsGamesOrientation
     */
    protected ?string $orientation = null;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataSupplementsGamesOrientation
     */
    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeUpdateV2AdDataSupplementsGamesOrientation $orientation
     * @return self
     */
    public function setOrientation(?string $orientation): self
    {
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->orientation !== null) {
            $result['orientation'] = $this->orientation;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['orientation'] ?? null) !== null) {
            $obj->orientation = (string) $v;
        }
        return $obj;
    }
}
