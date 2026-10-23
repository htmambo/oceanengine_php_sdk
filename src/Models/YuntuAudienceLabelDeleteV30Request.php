<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceLabelDeleteV30Request implements \JsonSerializable
{
    /**
     * 人群标签ID，需传入当前用户通过 API 渠道创建的标签ID（创建成功后会返回），否则会校验失败。
     * @var int
     */
    protected ?int $labelId = null;

    /**
     * 服务商ID
     * @var int
     */
    protected ?int $serviceProviderId = null;

    /**
     * 品牌ID
     * @var int
     */
    protected ?int $yuntuBrandId = null;

    /**
     * 人群标签ID，需传入当前用户通过 API 渠道创建的标签ID（创建成功后会返回），否则会校验失败。
     * @return int
     */
    public function getLabelId(): ?int
    {
        return $this->labelId;
    }

    /**
     * 人群标签ID，需传入当前用户通过 API 渠道创建的标签ID（创建成功后会返回），否则会校验失败。
     * @param int $labelId
     * @return self
     */
    public function setLabelId(?int $labelId): self
    {
        $this->labelId = $labelId;
        return $this;
    }

    /**
     * 服务商ID
     * @return int
     */
    public function getServiceProviderId(): ?int
    {
        return $this->serviceProviderId;
    }

    /**
     * 服务商ID
     * @param int $serviceProviderId
     * @return self
     */
    public function setServiceProviderId(?int $serviceProviderId): self
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * 品牌ID
     * @return int
     */
    public function getYuntuBrandId(): ?int
    {
        return $this->yuntuBrandId;
    }

    /**
     * 品牌ID
     * @param int $yuntuBrandId
     * @return self
     */
    public function setYuntuBrandId(?int $yuntuBrandId): self
    {
        $this->yuntuBrandId = $yuntuBrandId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->labelId !== null) {
            $result['label_id'] = $this->labelId;
        }
        if ($this->serviceProviderId !== null) {
            $result['service_provider_id'] = $this->serviceProviderId;
        }
        if ($this->yuntuBrandId !== null) {
            $result['yuntu_brand_id'] = $this->yuntuBrandId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['label_id'] ?? null) !== null) {
            $obj->labelId = (int) $v;
        }
        if (($v = $data['service_provider_id'] ?? null) !== null) {
            $obj->serviceProviderId = (int) $v;
        }
        if (($v = $data['yuntu_brand_id'] ?? null) !== null) {
            $obj->yuntuBrandId = (int) $v;
        }
        return $obj;
    }
}
