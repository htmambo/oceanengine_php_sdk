<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileEbpVideoGetV30Filtering implements \JsonSerializable
{
    /**
     * 评估类型
     * @var \Oceanengine\Models\FileEbpVideoGetV30FilteringEvaluateTypes[]
     */
    protected ?array $evaluateTypes = null;

    /**
     * 筛选文件名
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 筛选素材类型
     * @var \Oceanengine\Models\FileEbpVideoGetV30FilteringImageModes[]
     */
    protected ?array $imageModes = null;

    /**
     * 筛选素材ID
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 筛选所属EBP组织ID
     * @var int[]
     */
    protected ?array $subEbpId = null;

    /**
     * 评估类型
     * @return \Oceanengine\Models\FileEbpVideoGetV30FilteringEvaluateTypes[]
     */
    public function getEvaluateTypes(): ?array
    {
        return $this->evaluateTypes;
    }

    /**
     * 评估类型
     * @param \Oceanengine\Models\FileEbpVideoGetV30FilteringEvaluateTypes[] $evaluateTypes
     * @return self
     */
    public function setEvaluateTypes(?array $evaluateTypes): self
    {
        $this->evaluateTypes = $evaluateTypes;
        return $this;
    }

    /**
     * 筛选文件名
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 筛选文件名
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 筛选素材类型
     * @return \Oceanengine\Models\FileEbpVideoGetV30FilteringImageModes[]
     */
    public function getImageModes(): ?array
    {
        return $this->imageModes;
    }

    /**
     * 筛选素材类型
     * @param \Oceanengine\Models\FileEbpVideoGetV30FilteringImageModes[] $imageModes
     * @return self
     */
    public function setImageModes(?array $imageModes): self
    {
        $this->imageModes = $imageModes;
        return $this;
    }

    /**
     * 筛选素材ID
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 筛选素材ID
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 筛选所属EBP组织ID
     * @return int[]
     */
    public function getSubEbpId(): ?array
    {
        return $this->subEbpId;
    }

    /**
     * 筛选所属EBP组织ID
     * @param int[] $subEbpId
     * @return self
     */
    public function setSubEbpId(?array $subEbpId): self
    {
        $this->subEbpId = $subEbpId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->evaluateTypes !== null) {
            $result['evaluate_types'] = $this->evaluateTypes;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->imageModes !== null) {
            $result['image_modes'] = $this->imageModes;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->subEbpId !== null) {
            $result['sub_ebp_id'] = $this->subEbpId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['evaluate_types'] ?? null) !== null && is_array($v)) {
            $obj->evaluateTypes = $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['image_modes'] ?? null) !== null && is_array($v)) {
            $obj->imageModes = $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['sub_ebp_id'] ?? null) !== null && is_array($v)) {
            $obj->subEbpId = $v;
        }
        return $obj;
    }
}
