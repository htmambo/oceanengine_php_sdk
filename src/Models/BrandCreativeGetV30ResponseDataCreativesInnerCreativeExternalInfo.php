<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType
     */
    protected ?string $externalUrlType = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfoNormalExternalInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfoNormalExternalInfo $normalExternalInfo = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType
     */
    public function getExternalUrlType(): ?string
    {
        return $this->externalUrlType;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType $externalUrlType
     * @return self
     */
    public function setExternalUrlType(?string $externalUrlType): self
    {
        $this->externalUrlType = $externalUrlType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfoNormalExternalInfo
     */
    public function getNormalExternalInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfoNormalExternalInfo
    {
        return $this->normalExternalInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfoNormalExternalInfo $normalExternalInfo
     * @return self
     */
    public function setNormalExternalInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfoNormalExternalInfo $normalExternalInfo): self
    {
        $this->normalExternalInfo = $normalExternalInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->externalUrlType !== null) {
            $result['external_url_type'] = $this->externalUrlType;
        }
        if ($this->normalExternalInfo !== null) {
            $result['normal_external_info'] = $this->normalExternalInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['external_url_type'] ?? null) !== null) {
            $obj->externalUrlType = (string) $v;
        }
        if (($v = $data['normal_external_info'] ?? null) !== null && is_array($v)) {
            $obj->normalExternalInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeExternalInfoNormalExternalInfo::fromArray($v);
        }
        return $obj;
    }
}
