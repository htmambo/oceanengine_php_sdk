<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTrackUrlCheckV10ResponseDataFailTrackUrlInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @var string
     */
    protected ?string $trackUrl = null;

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackUrl(): ?string
    {
        return $this->trackUrl;
    }

    /**
     * @param string $trackUrl
     * @return self
     */
    public function setTrackUrl(?string $trackUrl): self
    {
        $this->trackUrl = $trackUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->trackUrl !== null) {
            $result['track_url'] = $this->trackUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['track_url'] ?? null) !== null) {
            $obj->trackUrl = (string) $v;
        }
        return $obj;
    }
}
