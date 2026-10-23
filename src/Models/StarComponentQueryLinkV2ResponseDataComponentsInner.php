<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentQueryLinkV2ResponseDataComponentsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $auditBanReason = null;

    /**
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * Android落地页链接 HTTPS URL
     * @var string
     */
    protected ?string $linkAndroid = null;

    /**
     * Android app 下载链接 HTTPS URL，Android下载时需要
     * @var string
     */
    protected ?string $linkAndroidDownload = null;

    /**
     * @var string
     */
    protected ?string $linkHarmony = null;

    /**
     * @var string
     */
    protected ?string $linkHarmonyDownload = null;

    /**
     * iOS落地页链接 HTTPS URL
     * @var string
     */
    protected ?string $linkIos = null;

    /**
     * iOS app 下载链接 App store 链接，iOS下载时需要
     * @var string
     */
    protected ?string $linkIosDownload = null;

    /**
     * 组件名称 10字内
     * @var string
     */
    protected ?string $linkName = null;

    /**
     * 组件投放目标 (1)：应用下载； (2)：线索留资； (3)：其他目标
     * @var int
     */
    protected ?int $linkPageTarget = null;

    /**
     * 适用平台 (0)：不限； (1)：Android； (2)：iOS
     * @var int
     */
    protected ?int $linkPlatform = null;

    /**
     * 媒体渠道 仅限以下 (1)：抖音
     * @var int
     */
    protected ?int $linkPlatformSource = null;

    /**
     * @var int
     */
    protected ?int $linkStatus = null;

    /**
     * 组件标题（介绍文案） 20字内
     * @var string
     */
    protected ?string $linkTitle = null;

    /**
     * 组件类型 仅限以下 (1)：落地页
     * @var int
     */
    protected ?int $linkType = null;

    /**
     * @var \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInnerLiveAttractComponent
     */
    protected ?\Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInnerLiveAttractComponent $liveAttractComponent = null;

    /**
     * @return string
     */
    public function getAuditBanReason(): ?string
    {
        return $this->auditBanReason;
    }

    /**
     * @param string $auditBanReason
     * @return self
     */
    public function setAuditBanReason(?string $auditBanReason): self
    {
        $this->auditBanReason = $auditBanReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * @param int $componentId
     * @return self
     */
    public function setComponentId(?int $componentId): self
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * Android落地页链接 HTTPS URL
     * @return string
     */
    public function getLinkAndroid(): ?string
    {
        return $this->linkAndroid;
    }

    /**
     * Android落地页链接 HTTPS URL
     * @param string $linkAndroid
     * @return self
     */
    public function setLinkAndroid(?string $linkAndroid): self
    {
        $this->linkAndroid = $linkAndroid;
        return $this;
    }

    /**
     * Android app 下载链接 HTTPS URL，Android下载时需要
     * @return string
     */
    public function getLinkAndroidDownload(): ?string
    {
        return $this->linkAndroidDownload;
    }

    /**
     * Android app 下载链接 HTTPS URL，Android下载时需要
     * @param string $linkAndroidDownload
     * @return self
     */
    public function setLinkAndroidDownload(?string $linkAndroidDownload): self
    {
        $this->linkAndroidDownload = $linkAndroidDownload;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkHarmony(): ?string
    {
        return $this->linkHarmony;
    }

    /**
     * @param string $linkHarmony
     * @return self
     */
    public function setLinkHarmony(?string $linkHarmony): self
    {
        $this->linkHarmony = $linkHarmony;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkHarmonyDownload(): ?string
    {
        return $this->linkHarmonyDownload;
    }

    /**
     * @param string $linkHarmonyDownload
     * @return self
     */
    public function setLinkHarmonyDownload(?string $linkHarmonyDownload): self
    {
        $this->linkHarmonyDownload = $linkHarmonyDownload;
        return $this;
    }

    /**
     * iOS落地页链接 HTTPS URL
     * @return string
     */
    public function getLinkIos(): ?string
    {
        return $this->linkIos;
    }

    /**
     * iOS落地页链接 HTTPS URL
     * @param string $linkIos
     * @return self
     */
    public function setLinkIos(?string $linkIos): self
    {
        $this->linkIos = $linkIos;
        return $this;
    }

    /**
     * iOS app 下载链接 App store 链接，iOS下载时需要
     * @return string
     */
    public function getLinkIosDownload(): ?string
    {
        return $this->linkIosDownload;
    }

    /**
     * iOS app 下载链接 App store 链接，iOS下载时需要
     * @param string $linkIosDownload
     * @return self
     */
    public function setLinkIosDownload(?string $linkIosDownload): self
    {
        $this->linkIosDownload = $linkIosDownload;
        return $this;
    }

    /**
     * 组件名称 10字内
     * @return string
     */
    public function getLinkName(): ?string
    {
        return $this->linkName;
    }

    /**
     * 组件名称 10字内
     * @param string $linkName
     * @return self
     */
    public function setLinkName(?string $linkName): self
    {
        $this->linkName = $linkName;
        return $this;
    }

    /**
     * 组件投放目标 (1)：应用下载； (2)：线索留资； (3)：其他目标
     * @return int
     */
    public function getLinkPageTarget(): ?int
    {
        return $this->linkPageTarget;
    }

    /**
     * 组件投放目标 (1)：应用下载； (2)：线索留资； (3)：其他目标
     * @param int $linkPageTarget
     * @return self
     */
    public function setLinkPageTarget(?int $linkPageTarget): self
    {
        $this->linkPageTarget = $linkPageTarget;
        return $this;
    }

    /**
     * 适用平台 (0)：不限； (1)：Android； (2)：iOS
     * @return int
     */
    public function getLinkPlatform(): ?int
    {
        return $this->linkPlatform;
    }

    /**
     * 适用平台 (0)：不限； (1)：Android； (2)：iOS
     * @param int $linkPlatform
     * @return self
     */
    public function setLinkPlatform(?int $linkPlatform): self
    {
        $this->linkPlatform = $linkPlatform;
        return $this;
    }

    /**
     * 媒体渠道 仅限以下 (1)：抖音
     * @return int
     */
    public function getLinkPlatformSource(): ?int
    {
        return $this->linkPlatformSource;
    }

    /**
     * 媒体渠道 仅限以下 (1)：抖音
     * @param int $linkPlatformSource
     * @return self
     */
    public function setLinkPlatformSource(?int $linkPlatformSource): self
    {
        $this->linkPlatformSource = $linkPlatformSource;
        return $this;
    }

    /**
     * @return int
     */
    public function getLinkStatus(): ?int
    {
        return $this->linkStatus;
    }

    /**
     * @param int $linkStatus
     * @return self
     */
    public function setLinkStatus(?int $linkStatus): self
    {
        $this->linkStatus = $linkStatus;
        return $this;
    }

    /**
     * 组件标题（介绍文案） 20字内
     * @return string
     */
    public function getLinkTitle(): ?string
    {
        return $this->linkTitle;
    }

    /**
     * 组件标题（介绍文案） 20字内
     * @param string $linkTitle
     * @return self
     */
    public function setLinkTitle(?string $linkTitle): self
    {
        $this->linkTitle = $linkTitle;
        return $this;
    }

    /**
     * 组件类型 仅限以下 (1)：落地页
     * @return int
     */
    public function getLinkType(): ?int
    {
        return $this->linkType;
    }

    /**
     * 组件类型 仅限以下 (1)：落地页
     * @param int $linkType
     * @return self
     */
    public function setLinkType(?int $linkType): self
    {
        $this->linkType = $linkType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInnerLiveAttractComponent
     */
    public function getLiveAttractComponent(): ?\Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInnerLiveAttractComponent
    {
        return $this->liveAttractComponent;
    }

    /**
     * @param \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInnerLiveAttractComponent $liveAttractComponent
     * @return self
     */
    public function setLiveAttractComponent(?\Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInnerLiveAttractComponent $liveAttractComponent): self
    {
        $this->liveAttractComponent = $liveAttractComponent;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditBanReason !== null) {
            $result['audit_ban_reason'] = $this->auditBanReason;
        }
        if ($this->componentId !== null) {
            $result['component_id'] = $this->componentId;
        }
        if ($this->linkAndroid !== null) {
            $result['link_android'] = $this->linkAndroid;
        }
        if ($this->linkAndroidDownload !== null) {
            $result['link_android_download'] = $this->linkAndroidDownload;
        }
        if ($this->linkHarmony !== null) {
            $result['link_harmony'] = $this->linkHarmony;
        }
        if ($this->linkHarmonyDownload !== null) {
            $result['link_harmony_download'] = $this->linkHarmonyDownload;
        }
        if ($this->linkIos !== null) {
            $result['link_ios'] = $this->linkIos;
        }
        if ($this->linkIosDownload !== null) {
            $result['link_ios_download'] = $this->linkIosDownload;
        }
        if ($this->linkName !== null) {
            $result['link_name'] = $this->linkName;
        }
        if ($this->linkPageTarget !== null) {
            $result['link_page_target'] = $this->linkPageTarget;
        }
        if ($this->linkPlatform !== null) {
            $result['link_platform'] = $this->linkPlatform;
        }
        if ($this->linkPlatformSource !== null) {
            $result['link_platform_source'] = $this->linkPlatformSource;
        }
        if ($this->linkStatus !== null) {
            $result['link_status'] = $this->linkStatus;
        }
        if ($this->linkTitle !== null) {
            $result['link_title'] = $this->linkTitle;
        }
        if ($this->linkType !== null) {
            $result['link_type'] = $this->linkType;
        }
        if ($this->liveAttractComponent !== null) {
            $result['live_attract_component'] = $this->liveAttractComponent;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_ban_reason'] ?? null) !== null) {
            $obj->auditBanReason = (string) $v;
        }
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (int) $v;
        }
        if (($v = $data['link_android'] ?? null) !== null) {
            $obj->linkAndroid = (string) $v;
        }
        if (($v = $data['link_android_download'] ?? null) !== null) {
            $obj->linkAndroidDownload = (string) $v;
        }
        if (($v = $data['link_harmony'] ?? null) !== null) {
            $obj->linkHarmony = (string) $v;
        }
        if (($v = $data['link_harmony_download'] ?? null) !== null) {
            $obj->linkHarmonyDownload = (string) $v;
        }
        if (($v = $data['link_ios'] ?? null) !== null) {
            $obj->linkIos = (string) $v;
        }
        if (($v = $data['link_ios_download'] ?? null) !== null) {
            $obj->linkIosDownload = (string) $v;
        }
        if (($v = $data['link_name'] ?? null) !== null) {
            $obj->linkName = (string) $v;
        }
        if (($v = $data['link_page_target'] ?? null) !== null) {
            $obj->linkPageTarget = (int) $v;
        }
        if (($v = $data['link_platform'] ?? null) !== null) {
            $obj->linkPlatform = (int) $v;
        }
        if (($v = $data['link_platform_source'] ?? null) !== null) {
            $obj->linkPlatformSource = (int) $v;
        }
        if (($v = $data['link_status'] ?? null) !== null) {
            $obj->linkStatus = (int) $v;
        }
        if (($v = $data['link_title'] ?? null) !== null) {
            $obj->linkTitle = (string) $v;
        }
        if (($v = $data['link_type'] ?? null) !== null) {
            $obj->linkType = (int) $v;
        }
        if (($v = $data['live_attract_component'] ?? null) !== null && is_array($v)) {
            $obj->liveAttractComponent = \Oceanengine\Models\StarComponentQueryLinkV2ResponseDataComponentsInnerLiveAttractComponent::fromArray($v);
        }
        return $obj;
    }
}
