<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 添加起量失败的素材list
     * @var \Oceanengine\Models\ToolsMaterialRaiseCreateV30ResponseDataErrorMaterialListInner[]
     */
    protected ?array $errorMaterialList = null;

    /**
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * 添加起量失败的素材list
     * @return \Oceanengine\Models\ToolsMaterialRaiseCreateV30ResponseDataErrorMaterialListInner[]
     */
    public function getErrorMaterialList(): ?array
    {
        return $this->errorMaterialList;
    }

    /**
     * 添加起量失败的素材list
     * @param \Oceanengine\Models\ToolsMaterialRaiseCreateV30ResponseDataErrorMaterialListInner[] $errorMaterialList
     * @return self
     */
    public function setErrorMaterialList(?array $errorMaterialList): self
    {
        $this->errorMaterialList = $errorMaterialList;
        return $this;
    }

    /**
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorMaterialList !== null) {
            $result['error_material_list'] = $this->errorMaterialList;
        }
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_material_list'] ?? null) !== null && is_array($v)) {
            $obj->errorMaterialList = array_map(fn ($vv) => \Oceanengine\Models\ToolsMaterialRaiseCreateV30ResponseDataErrorMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        return $obj;
    }
}
