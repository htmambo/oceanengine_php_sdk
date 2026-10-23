<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectStdProjectToolsGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInner[]
     */
    protected ?array $projectAdjustInfo = null;

    /**
     * @return \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInner[]
     */
    public function getProjectAdjustInfo(): ?array
    {
        return $this->projectAdjustInfo;
    }

    /**
     * @param \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInner[] $projectAdjustInfo
     * @return self
     */
    public function setProjectAdjustInfo(?array $projectAdjustInfo): self
    {
        $this->projectAdjustInfo = $projectAdjustInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->projectAdjustInfo !== null) {
            $result['project_adjust_info'] = $this->projectAdjustInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['project_adjust_info'] ?? null) !== null && is_array($v)) {
            $obj->projectAdjustInfo = array_map(fn ($vv) => \Oceanengine\Models\OcProjectStdProjectToolsGetV30ResponseDataProjectAdjustInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
