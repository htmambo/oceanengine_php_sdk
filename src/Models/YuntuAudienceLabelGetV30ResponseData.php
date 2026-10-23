<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\YuntuAudienceLabelGetV30ResponseDataLabelInfo
     */
    protected ?\Oceanengine\Models\YuntuAudienceLabelGetV30ResponseDataLabelInfo $labelInfo = null;

    /**
     * @return \Oceanengine\Models\YuntuAudienceLabelGetV30ResponseDataLabelInfo
     */
    public function getLabelInfo(): ?\Oceanengine\Models\YuntuAudienceLabelGetV30ResponseDataLabelInfo
    {
        return $this->labelInfo;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceLabelGetV30ResponseDataLabelInfo $labelInfo
     * @return self
     */
    public function setLabelInfo(?\Oceanengine\Models\YuntuAudienceLabelGetV30ResponseDataLabelInfo $labelInfo): self
    {
        $this->labelInfo = $labelInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->labelInfo !== null) {
            $result['label_info'] = $this->labelInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['label_info'] ?? null) !== null && is_array($v)) {
            $obj->labelInfo = \Oceanengine\Models\YuntuAudienceLabelGetV30ResponseDataLabelInfo::fromArray($v);
        }
        return $obj;
    }
}
