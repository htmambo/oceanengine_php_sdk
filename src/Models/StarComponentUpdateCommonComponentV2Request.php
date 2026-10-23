<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentUpdateCommonComponentV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponent
     */
    protected ?\Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponent $commonComponent = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return \Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponent
     */
    public function getCommonComponent(): ?\Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponent
    {
        return $this->commonComponent;
    }

    /**
     * @param \Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponent $commonComponent
     * @return self
     */
    public function setCommonComponent(?\Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponent $commonComponent): self
    {
        $this->commonComponent = $commonComponent;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->commonComponent !== null) {
            $result['common_component'] = $this->commonComponent;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['common_component'] ?? null) !== null && is_array($v)) {
            $obj->commonComponent = \Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponent::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
