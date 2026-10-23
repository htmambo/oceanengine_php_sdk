<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoPauseV2ResponseData implements \JsonSerializable
{
    /**
     * 删除失败的素材id明细(素材id下仍然有至少一个的可投创意)
     * @var int[]
     */
    protected ?array $failMaterialIds = null;

    /**
     * 清理结果明细
     * @var array<string,\Oceanengine\Models\FileVideoPauseV2ResponseDataMaterialClearResultValue>
     */
    protected ?array $materialClearResult = null;

    /**
     * 清理结果 允许值： SUCCESS 成功 PART_SUCCESS 部分成功 FAIL 失败
     * @var string
     */
    protected ?string $status = null;

    /**
     * 删除失败的素材id明细(素材id下仍然有至少一个的可投创意)
     * @return int[]
     */
    public function getFailMaterialIds(): ?array
    {
        return $this->failMaterialIds;
    }

    /**
     * 删除失败的素材id明细(素材id下仍然有至少一个的可投创意)
     * @param int[] $failMaterialIds
     * @return self
     */
    public function setFailMaterialIds(?array $failMaterialIds): self
    {
        $this->failMaterialIds = $failMaterialIds;
        return $this;
    }

    /**
     * 清理结果明细
     * @return array<string,\Oceanengine\Models\FileVideoPauseV2ResponseDataMaterialClearResultValue>
     */
    public function getMaterialClearResult(): ?array
    {
        return $this->materialClearResult;
    }

    /**
     * 清理结果明细
     * @param array<string,\Oceanengine\Models\FileVideoPauseV2ResponseDataMaterialClearResultValue> $materialClearResult
     * @return self
     */
    public function setMaterialClearResult(?array $materialClearResult): self
    {
        $this->materialClearResult = $materialClearResult;
        return $this;
    }

    /**
     * 清理结果 允许值： SUCCESS 成功 PART_SUCCESS 部分成功 FAIL 失败
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * 清理结果 允许值： SUCCESS 成功 PART_SUCCESS 部分成功 FAIL 失败
     * @param string $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failMaterialIds !== null) {
            $result['fail_material_ids'] = $this->failMaterialIds;
        }
        if ($this->materialClearResult !== null) {
            $result['material_clear_result'] = $this->materialClearResult;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_material_ids'] ?? null) !== null && is_array($v)) {
            $obj->failMaterialIds = $v;
        }
        if (($v = $data['material_clear_result'] ?? null) !== null && is_array($v)) {
            $obj->materialClearResult = array_map(fn ($vv) => \Oceanengine\Models\FileVideoPauseV2ResponseDataMaterialClearResultValue::fromArray($vv), $v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
