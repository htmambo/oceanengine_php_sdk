<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTrackUrlCheckV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanTrackUrlCheckV10ResponseDataFailTrackUrlInner[]
     */
    protected ?array $failTrackUrl = null;

    /**
     * @var string[]
     */
    protected ?array $sucTrackUrl = null;

    /**
     * @return \Oceanengine\Models\QianchuanTrackUrlCheckV10ResponseDataFailTrackUrlInner[]
     */
    public function getFailTrackUrl(): ?array
    {
        return $this->failTrackUrl;
    }

    /**
     * @param \Oceanengine\Models\QianchuanTrackUrlCheckV10ResponseDataFailTrackUrlInner[] $failTrackUrl
     * @return self
     */
    public function setFailTrackUrl(?array $failTrackUrl): self
    {
        $this->failTrackUrl = $failTrackUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSucTrackUrl(): ?array
    {
        return $this->sucTrackUrl;
    }

    /**
     * @param string[] $sucTrackUrl
     * @return self
     */
    public function setSucTrackUrl(?array $sucTrackUrl): self
    {
        $this->sucTrackUrl = $sucTrackUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failTrackUrl !== null) {
            $result['fail_track_url'] = $this->failTrackUrl;
        }
        if ($this->sucTrackUrl !== null) {
            $result['suc_track_url'] = $this->sucTrackUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_track_url'] ?? null) !== null && is_array($v)) {
            $obj->failTrackUrl = array_map(fn ($vv) => \Oceanengine\Models\QianchuanTrackUrlCheckV10ResponseDataFailTrackUrlInner::fromArray($vv), $v);
        }
        if (($v = $data['suc_track_url'] ?? null) !== null && is_array($v)) {
            $obj->sucTrackUrl = $v;
        }
        return $obj;
    }
}
