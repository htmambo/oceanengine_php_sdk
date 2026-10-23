<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\YuntuAudienceInfoGetV30ResponseDataAudienceInfo
     */
    protected ?\Oceanengine\Models\YuntuAudienceInfoGetV30ResponseDataAudienceInfo $audienceInfo = null;

    /**
     * @return \Oceanengine\Models\YuntuAudienceInfoGetV30ResponseDataAudienceInfo
     */
    public function getAudienceInfo(): ?\Oceanengine\Models\YuntuAudienceInfoGetV30ResponseDataAudienceInfo
    {
        return $this->audienceInfo;
    }

    /**
     * @param \Oceanengine\Models\YuntuAudienceInfoGetV30ResponseDataAudienceInfo $audienceInfo
     * @return self
     */
    public function setAudienceInfo(?\Oceanengine\Models\YuntuAudienceInfoGetV30ResponseDataAudienceInfo $audienceInfo): self
    {
        $this->audienceInfo = $audienceInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audienceInfo !== null) {
            $result['audience_info'] = $this->audienceInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_info'] ?? null) !== null && is_array($v)) {
            $obj->audienceInfo = \Oceanengine\Models\YuntuAudienceInfoGetV30ResponseDataAudienceInfo::fromArray($v);
        }
        return $obj;
    }
}
