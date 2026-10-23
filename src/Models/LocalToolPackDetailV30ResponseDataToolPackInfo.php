<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalToolPackDetailV30ResponseDataToolPackInfo implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $enable = null;

    /**
     * @var bool
     */
    protected ?bool $enableIntelligentSelection = null;

    /**
     * @var int
     */
    protected ?int $toolPackId = null;

    /**
     * @var string
     */
    protected ?string $toolPackName = null;

    /**
     * @var \Oceanengine\Models\LocalToolPackDetailV30DataToolPackInfoToolPackTypes[]
     */
    protected ?array $toolPackTypes = null;

    /**
     * @return bool
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * @param bool $enable
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnableIntelligentSelection(): ?bool
    {
        return $this->enableIntelligentSelection;
    }

    /**
     * @param bool $enableIntelligentSelection
     * @return self
     */
    public function setEnableIntelligentSelection(?bool $enableIntelligentSelection): self
    {
        $this->enableIntelligentSelection = $enableIntelligentSelection;
        return $this;
    }

    /**
     * @return int
     */
    public function getToolPackId(): ?int
    {
        return $this->toolPackId;
    }

    /**
     * @param int $toolPackId
     * @return self
     */
    public function setToolPackId(?int $toolPackId): self
    {
        $this->toolPackId = $toolPackId;
        return $this;
    }

    /**
     * @return string
     */
    public function getToolPackName(): ?string
    {
        return $this->toolPackName;
    }

    /**
     * @param string $toolPackName
     * @return self
     */
    public function setToolPackName(?string $toolPackName): self
    {
        $this->toolPackName = $toolPackName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalToolPackDetailV30DataToolPackInfoToolPackTypes[]
     */
    public function getToolPackTypes(): ?array
    {
        return $this->toolPackTypes;
    }

    /**
     * @param \Oceanengine\Models\LocalToolPackDetailV30DataToolPackInfoToolPackTypes[] $toolPackTypes
     * @return self
     */
    public function setToolPackTypes(?array $toolPackTypes): self
    {
        $this->toolPackTypes = $toolPackTypes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->enable !== null) {
            $result['enable'] = $this->enable;
        }
        if ($this->enableIntelligentSelection !== null) {
            $result['enable_intelligent_selection'] = $this->enableIntelligentSelection;
        }
        if ($this->toolPackId !== null) {
            $result['tool_pack_id'] = $this->toolPackId;
        }
        if ($this->toolPackName !== null) {
            $result['tool_pack_name'] = $this->toolPackName;
        }
        if ($this->toolPackTypes !== null) {
            $result['tool_pack_types'] = $this->toolPackTypes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['enable'] ?? null) !== null) {
            $obj->enable = (bool) $v;
        }
        if (($v = $data['enable_intelligent_selection'] ?? null) !== null) {
            $obj->enableIntelligentSelection = (bool) $v;
        }
        if (($v = $data['tool_pack_id'] ?? null) !== null) {
            $obj->toolPackId = (int) $v;
        }
        if (($v = $data['tool_pack_name'] ?? null) !== null) {
            $obj->toolPackName = (string) $v;
        }
        if (($v = $data['tool_pack_types'] ?? null) !== null && is_array($v)) {
            $obj->toolPackTypes = $v;
        }
        return $obj;
    }
}
