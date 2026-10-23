<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetV30Filtering implements \JsonSerializable
{
    /**
     * 锚点创建结束日期，格式：yyyy-MM-dd
     * @var string
     */
    protected ?string $anchorEndTime = null;

    /**
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var string
     */
    protected ?string $anchorName = null;

    /**
     * 锚点创建开始日期，格式：yyyy-MM-dd
     * @var string
     */
    protected ?string $anchorStartTime = null;

    /**
     * 锚点类型，允许值： - 应用下载-游戏：APP_GAME - 应用下载-网服：APP_INTERNET_SERVICE - 应用下载-电商：APP_SHOP - 高级在线预约：ONLINE_SUBSCRIBE
     * @var \Oceanengine\Models\NativeAnchorGetV30FilteringAnchorType[]
     */
    protected ?array $anchorType = null;

    /**
     * @var string
     */
    protected ?string $androidPackageName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetV30FilteringExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var string
     */
    protected ?string $iosPackageName = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetV30FilteringLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetV30FilteringSource[]
     */
    protected ?array $source = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetV30FilteringStatus[]
     */
    protected ?array $status = null;

    /**
     * 锚点创建结束日期，格式：yyyy-MM-dd
     * @return string
     */
    public function getAnchorEndTime(): ?string
    {
        return $this->anchorEndTime;
    }

    /**
     * 锚点创建结束日期，格式：yyyy-MM-dd
     * @param string $anchorEndTime
     * @return self
     */
    public function setAnchorEndTime(?string $anchorEndTime): self
    {
        $this->anchorEndTime = $anchorEndTime;
        return $this;
    }

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
     * 锚点创建开始日期，格式：yyyy-MM-dd
     * @return string
     */
    public function getAnchorStartTime(): ?string
    {
        return $this->anchorStartTime;
    }

    /**
     * 锚点创建开始日期，格式：yyyy-MM-dd
     * @param string $anchorStartTime
     * @return self
     */
    public function setAnchorStartTime(?string $anchorStartTime): self
    {
        $this->anchorStartTime = $anchorStartTime;
        return $this;
    }

    /**
     * 锚点类型，允许值： - 应用下载-游戏：APP_GAME - 应用下载-网服：APP_INTERNET_SERVICE - 应用下载-电商：APP_SHOP - 高级在线预约：ONLINE_SUBSCRIBE
     * @return \Oceanengine\Models\NativeAnchorGetV30FilteringAnchorType[]
     */
    public function getAnchorType(): ?array
    {
        return $this->anchorType;
    }

    /**
     * 锚点类型，允许值： - 应用下载-游戏：APP_GAME - 应用下载-网服：APP_INTERNET_SERVICE - 应用下载-电商：APP_SHOP - 高级在线预约：ONLINE_SUBSCRIBE
     * @param \Oceanengine\Models\NativeAnchorGetV30FilteringAnchorType[] $anchorType
     * @return self
     */
    public function setAnchorType(?array $anchorType): self
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
     * @return \Oceanengine\Models\NativeAnchorGetV30FilteringExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetV30FilteringExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
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
     * @return \Oceanengine\Models\NativeAnchorGetV30FilteringLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetV30FilteringLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetV30FilteringSource[]
     */
    public function getSource(): ?array
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetV30FilteringSource[] $source
     * @return self
     */
    public function setSource(?array $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetV30FilteringStatus[]
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetV30FilteringStatus[] $status
     * @return self
     */
    public function setStatus(?array $status): self
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
        if ($this->anchorEndTime !== null) {
            $result['anchor_end_time'] = $this->anchorEndTime;
        }
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorName !== null) {
            $result['anchor_name'] = $this->anchorName;
        }
        if ($this->anchorStartTime !== null) {
            $result['anchor_start_time'] = $this->anchorStartTime;
        }
        if ($this->anchorType !== null) {
            $result['anchor_type'] = $this->anchorType;
        }
        if ($this->androidPackageName !== null) {
            $result['android_package_name'] = $this->androidPackageName;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->iosPackageName !== null) {
            $result['ios_package_name'] = $this->iosPackageName;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
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
        if (($v = $data['anchor_end_time'] ?? null) !== null) {
            $obj->anchorEndTime = (string) $v;
        }
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_name'] ?? null) !== null) {
            $obj->anchorName = (string) $v;
        }
        if (($v = $data['anchor_start_time'] ?? null) !== null) {
            $obj->anchorStartTime = (string) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null && is_array($v)) {
            $obj->anchorType = $v;
        }
        if (($v = $data['android_package_name'] ?? null) !== null) {
            $obj->androidPackageName = (string) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['ios_package_name'] ?? null) !== null) {
            $obj->iosPackageName = (string) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null && is_array($v)) {
            $obj->source = $v;
        }
        if (($v = $data['status'] ?? null) !== null && is_array($v)) {
            $obj->status = $v;
        }
        return $obj;
    }
}
