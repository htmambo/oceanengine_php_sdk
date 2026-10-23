<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchorOrangeSiteInfo implements \JsonSerializable
{
    /**
     * 安卓端落地页链接，内部需要包含应用下载链接
     * @var string
     */
    protected ?string $androidExternalUrl = null;

    /**
     * @var string
     */
    protected ?string $harmonyExternalUrl = null;

    /**
     * iOS端落地页链接，内部需要包含应用下载链接
     * @var string
     */
    protected ?string $iosExternalUrl = null;

    /**
     * 安卓端落地页链接，内部需要包含应用下载链接
     * @return string
     */
    public function getAndroidExternalUrl(): ?string
    {
        return $this->androidExternalUrl;
    }

    /**
     * 安卓端落地页链接，内部需要包含应用下载链接
     * @param string $androidExternalUrl
     * @return self
     */
    public function setAndroidExternalUrl(?string $androidExternalUrl): self
    {
        $this->androidExternalUrl = $androidExternalUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getHarmonyExternalUrl(): ?string
    {
        return $this->harmonyExternalUrl;
    }

    /**
     * @param string $harmonyExternalUrl
     * @return self
     */
    public function setHarmonyExternalUrl(?string $harmonyExternalUrl): self
    {
        $this->harmonyExternalUrl = $harmonyExternalUrl;
        return $this;
    }

    /**
     * iOS端落地页链接，内部需要包含应用下载链接
     * @return string
     */
    public function getIosExternalUrl(): ?string
    {
        return $this->iosExternalUrl;
    }

    /**
     * iOS端落地页链接，内部需要包含应用下载链接
     * @param string $iosExternalUrl
     * @return self
     */
    public function setIosExternalUrl(?string $iosExternalUrl): self
    {
        $this->iosExternalUrl = $iosExternalUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidExternalUrl !== null) {
            $result['android_external_url'] = $this->androidExternalUrl;
        }
        if ($this->harmonyExternalUrl !== null) {
            $result['harmony_external_url'] = $this->harmonyExternalUrl;
        }
        if ($this->iosExternalUrl !== null) {
            $result['ios_external_url'] = $this->iosExternalUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_external_url'] ?? null) !== null) {
            $obj->androidExternalUrl = (string) $v;
        }
        if (($v = $data['harmony_external_url'] ?? null) !== null) {
            $obj->harmonyExternalUrl = (string) $v;
        }
        if (($v = $data['ios_external_url'] ?? null) !== null) {
            $obj->iosExternalUrl = (string) $v;
        }
        return $obj;
    }
}
