<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownload implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAndroidApp
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAndroidApp $androidApp = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAvatar
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAvatar $avatar = null;

    /**
     * @var string
     */
    protected ?string $desc = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadIosApp
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadIosApp $iosApp = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAndroidApp
     */
    public function getAndroidApp(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAndroidApp
    {
        return $this->androidApp;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAndroidApp $androidApp
     * @return self
     */
    public function setAndroidApp(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAndroidApp $androidApp): self
    {
        $this->androidApp = $androidApp;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAvatar
     */
    public function getAvatar(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAvatar
    {
        return $this->avatar;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAvatar $avatar
     * @return self
     */
    public function setAvatar(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAvatar $avatar): self
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     * @return self
     */
    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadIosApp
     */
    public function getIosApp(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadIosApp
    {
        return $this->iosApp;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadIosApp $iosApp
     * @return self
     */
    public function setIosApp(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadIosApp $iosApp): self
    {
        $this->iosApp = $iosApp;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidApp !== null) {
            $result['android_app'] = $this->androidApp;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->desc !== null) {
            $result['desc'] = $this->desc;
        }
        if ($this->iosApp !== null) {
            $result['ios_app'] = $this->iosApp;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_app'] ?? null) !== null && is_array($v)) {
            $obj->androidApp = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAndroidApp::fromArray($v);
        }
        if (($v = $data['avatar'] ?? null) !== null && is_array($v)) {
            $obj->avatar = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadAvatar::fromArray($v);
        }
        if (($v = $data['desc'] ?? null) !== null) {
            $obj->desc = (string) $v;
        }
        if (($v = $data['ios_app'] ?? null) !== null && is_array($v)) {
            $obj->iosApp = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAppDownloadIosApp::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
