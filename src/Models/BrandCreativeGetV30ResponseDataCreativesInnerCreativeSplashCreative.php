<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreative implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImage
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImage $splashDynamicImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideo $splashFullVideo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashStaticImage
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashStaticImage $splashStaticImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType
     */
    protected ?string $splashType = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImage
     */
    public function getSplashDynamicImage(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImage
    {
        return $this->splashDynamicImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImage $splashDynamicImage
     * @return self
     */
    public function setSplashDynamicImage(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImage $splashDynamicImage): self
    {
        $this->splashDynamicImage = $splashDynamicImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideo
     */
    public function getSplashFullVideo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideo
    {
        return $this->splashFullVideo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideo $splashFullVideo
     * @return self
     */
    public function setSplashFullVideo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideo $splashFullVideo): self
    {
        $this->splashFullVideo = $splashFullVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashStaticImage
     */
    public function getSplashStaticImage(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashStaticImage
    {
        return $this->splashStaticImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashStaticImage $splashStaticImage
     * @return self
     */
    public function setSplashStaticImage(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashStaticImage $splashStaticImage): self
    {
        $this->splashStaticImage = $splashStaticImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType
     */
    public function getSplashType(): ?string
    {
        return $this->splashType;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType $splashType
     * @return self
     */
    public function setSplashType(?string $splashType): self
    {
        $this->splashType = $splashType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->splashDynamicImage !== null) {
            $result['splash_dynamic_image'] = $this->splashDynamicImage;
        }
        if ($this->splashFullVideo !== null) {
            $result['splash_full_video'] = $this->splashFullVideo;
        }
        if ($this->splashStaticImage !== null) {
            $result['splash_static_image'] = $this->splashStaticImage;
        }
        if ($this->splashType !== null) {
            $result['splash_type'] = $this->splashType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['splash_dynamic_image'] ?? null) !== null && is_array($v)) {
            $obj->splashDynamicImage = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImage::fromArray($v);
        }
        if (($v = $data['splash_full_video'] ?? null) !== null && is_array($v)) {
            $obj->splashFullVideo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashFullVideo::fromArray($v);
        }
        if (($v = $data['splash_static_image'] ?? null) !== null && is_array($v)) {
            $obj->splashStaticImage = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashStaticImage::fromArray($v);
        }
        if (($v = $data['splash_type'] ?? null) !== null) {
            $obj->splashType = (string) $v;
        }
        return $obj;
    }
}
