<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeUpdateV30RequestTrackUrlInfo implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $actionTrackUrls = null;

    /**
     * @var string[]
     */
    protected ?array $effectiveFrame = null;

    /**
     * @var string[]
     */
    protected ?array $trackUrls = null;

    /**
     * @return string[]
     */
    public function getActionTrackUrls(): ?array
    {
        return $this->actionTrackUrls;
    }

    /**
     * @param string[] $actionTrackUrls
     * @return self
     */
    public function setActionTrackUrls(?array $actionTrackUrls): self
    {
        $this->actionTrackUrls = $actionTrackUrls;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getEffectiveFrame(): ?array
    {
        return $this->effectiveFrame;
    }

    /**
     * @param string[] $effectiveFrame
     * @return self
     */
    public function setEffectiveFrame(?array $effectiveFrame): self
    {
        $this->effectiveFrame = $effectiveFrame;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTrackUrls(): ?array
    {
        return $this->trackUrls;
    }

    /**
     * @param string[] $trackUrls
     * @return self
     */
    public function setTrackUrls(?array $trackUrls): self
    {
        $this->trackUrls = $trackUrls;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionTrackUrls !== null) {
            $result['action_track_urls'] = $this->actionTrackUrls;
        }
        if ($this->effectiveFrame !== null) {
            $result['effective_frame'] = $this->effectiveFrame;
        }
        if ($this->trackUrls !== null) {
            $result['track_urls'] = $this->trackUrls;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_track_urls'] ?? null) !== null && is_array($v)) {
            $obj->actionTrackUrls = $v;
        }
        if (($v = $data['effective_frame'] ?? null) !== null && is_array($v)) {
            $obj->effectiveFrame = $v;
        }
        if (($v = $data['track_urls'] ?? null) !== null && is_array($v)) {
            $obj->trackUrls = $v;
        }
        return $obj;
    }
}
