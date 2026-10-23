<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var string
     */
    protected ?string $anchorName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetV30DataListAnchorShareType
     */
    protected ?string $anchorShareType = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetV30DataListAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * @var string
     */
    protected ?string $androidPackageName = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $iosPackageName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetV30DataListSource
     */
    protected ?string $source = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorName(): ?string
    {
        return $this->anchorName;
    }

    /**
     * @param string $anchorName
     * @return self
     */
    public function setAnchorName(?string $anchorName): self
    {
        $this->anchorName = $anchorName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetV30DataListAnchorShareType
     */
    public function getAnchorShareType(): ?string
    {
        return $this->anchorShareType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetV30DataListAnchorShareType $anchorShareType
     * @return self
     */
    public function setAnchorShareType(?string $anchorShareType): self
    {
        $this->anchorShareType = $anchorShareType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetV30DataListAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetV30DataListAnchorType $anchorType
     * @return self
     */
    public function setAnchorType(?string $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * @return string
     */
    public function getAndroidPackageName(): ?string
    {
        return $this->androidPackageName;
    }

    /**
     * @param string $androidPackageName
     * @return self
     */
    public function setAndroidPackageName(?string $androidPackageName): self
    {
        $this->androidPackageName = $androidPackageName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosPackageName(): ?string
    {
        return $this->iosPackageName;
    }

    /**
     * @param string $iosPackageName
     * @return self
     */
    public function setIosPackageName(?string $iosPackageName): self
    {
        $this->iosPackageName = $iosPackageName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetV30DataListSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetV30DataListSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetV30DataListStatus $status
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
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorName !== null) {
            $result['anchor_name'] = $this->anchorName;
        }
        if ($this->anchorShareType !== null) {
            $result['anchor_share_type'] = $this->anchorShareType;
        }
        if ($this->anchorType !== null) {
            $result['anchor_type'] = $this->anchorType;
        }
        if ($this->androidPackageName !== null) {
            $result['android_package_name'] = $this->androidPackageName;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->iosPackageName !== null) {
            $result['ios_package_name'] = $this->iosPackageName;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_name'] ?? null) !== null) {
            $obj->anchorName = (string) $v;
        }
        if (($v = $data['anchor_share_type'] ?? null) !== null) {
            $obj->anchorShareType = (string) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (string) $v;
        }
        if (($v = $data['android_package_name'] ?? null) !== null) {
            $obj->androidPackageName = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['ios_package_name'] ?? null) !== null) {
            $obj->iosPackageName = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
