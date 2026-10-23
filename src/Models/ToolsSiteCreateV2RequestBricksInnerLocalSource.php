<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerLocalSource implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $poster = null;

    /**
     * @var string
     */
    protected ?string $vid = null;

    /**
     * @return string
     */
    public function getPoster(): ?string
    {
        return $this->poster;
    }

    /**
     * @param string $poster
     * @return self
     */
    public function setPoster(?string $poster): self
    {
        $this->poster = $poster;
        return $this;
    }

    /**
     * @return string
     */
    public function getVid(): ?string
    {
        return $this->vid;
    }

    /**
     * @param string $vid
     * @return self
     */
    public function setVid(?string $vid): self
    {
        $this->vid = $vid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->poster !== null) {
            $result['poster'] = $this->poster;
        }
        if ($this->vid !== null) {
            $result['vid'] = $this->vid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['poster'] ?? null) !== null) {
            $obj->poster = (string) $v;
        }
        if (($v = $data['vid'] ?? null) !== null) {
            $obj->vid = (string) $v;
        }
        return $obj;
    }
}
