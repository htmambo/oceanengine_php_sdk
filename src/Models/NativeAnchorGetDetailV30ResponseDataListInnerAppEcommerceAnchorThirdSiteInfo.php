<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchorThirdSiteInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $androidDownloadUrl = null;

    /**
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * @var string
     */
    protected ?string $harmonyDownloadUrl = null;

    /**
     * @var string
     */
    protected ?string $iosDownloadUrl = null;

    /**
     * @return string
     */
    public function getAndroidDownloadUrl(): ?string
    {
        return $this->androidDownloadUrl;
    }

    /**
     * @param string $androidDownloadUrl
     * @return self
     */
    public function setAndroidDownloadUrl(?string $androidDownloadUrl): self
    {
        $this->androidDownloadUrl = $androidDownloadUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getHarmonyDownloadUrl(): ?string
    {
        return $this->harmonyDownloadUrl;
    }

    /**
     * @param string $harmonyDownloadUrl
     * @return self
     */
    public function setHarmonyDownloadUrl(?string $harmonyDownloadUrl): self
    {
        $this->harmonyDownloadUrl = $harmonyDownloadUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getIosDownloadUrl(): ?string
    {
        return $this->iosDownloadUrl;
    }

    /**
     * @param string $iosDownloadUrl
     * @return self
     */
    public function setIosDownloadUrl(?string $iosDownloadUrl): self
    {
        $this->iosDownloadUrl = $iosDownloadUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidDownloadUrl !== null) {
            $result['android_download_url'] = $this->androidDownloadUrl;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->harmonyDownloadUrl !== null) {
            $result['harmony_download_url'] = $this->harmonyDownloadUrl;
        }
        if ($this->iosDownloadUrl !== null) {
            $result['ios_download_url'] = $this->iosDownloadUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_download_url'] ?? null) !== null) {
            $obj->androidDownloadUrl = (string) $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['harmony_download_url'] ?? null) !== null) {
            $obj->harmonyDownloadUrl = (string) $v;
        }
        if (($v = $data['ios_download_url'] ?? null) !== null) {
            $obj->iosDownloadUrl = (string) $v;
        }
        return $obj;
    }
}
