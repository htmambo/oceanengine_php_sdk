<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButton
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButton $button = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerCoupon
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerCoupon $coupon = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerForm
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerForm $form = null;

    /**
     * 组件在模板中的位置描述，需和【基于站点创建模板】接口返回的组件index保持一致
     * @var string
     */
    protected ?string $index = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPicture
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPicture $picture = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroup
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroup $pictureGroup = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerText
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerText $text = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksType
     */
    protected ?string $type = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideo
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideo $video = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatApplet
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatApplet $wechatApplet = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatGame
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatGame $wechatGame = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButton
     */
    public function getButton(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButton
    {
        return $this->button;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButton $button
     * @return self
     */
    public function setButton(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButton $button): self
    {
        $this->button = $button;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerCoupon
     */
    public function getCoupon(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerCoupon
    {
        return $this->coupon;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerCoupon $coupon
     * @return self
     */
    public function setCoupon(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerCoupon $coupon): self
    {
        $this->coupon = $coupon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerForm
     */
    public function getForm(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerForm
    {
        return $this->form;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerForm $form
     * @return self
     */
    public function setForm(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerForm $form): self
    {
        $this->form = $form;
        return $this;
    }

    /**
     * 组件在模板中的位置描述，需和【基于站点创建模板】接口返回的组件index保持一致
     * @return string
     */
    public function getIndex(): ?string
    {
        return $this->index;
    }

    /**
     * 组件在模板中的位置描述，需和【基于站点创建模板】接口返回的组件index保持一致
     * @param string $index
     * @return self
     */
    public function setIndex(?string $index): self
    {
        $this->index = $index;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPicture
     */
    public function getPicture(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPicture
    {
        return $this->picture;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPicture $picture
     * @return self
     */
    public function setPicture(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPicture $picture): self
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroup
     */
    public function getPictureGroup(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroup
    {
        return $this->pictureGroup;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroup $pictureGroup
     * @return self
     */
    public function setPictureGroup(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroup $pictureGroup): self
    {
        $this->pictureGroup = $pictureGroup;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerText
     */
    public function getText(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerText
    {
        return $this->text;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerText $text
     * @return self
     */
    public function setText(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerText $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2BricksType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideo
     */
    public function getVideo(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideo
    {
        return $this->video;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideo $video
     * @return self
     */
    public function setVideo(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideo $video): self
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatApplet
     */
    public function getWechatApplet(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatApplet
    {
        return $this->wechatApplet;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatApplet $wechatApplet
     * @return self
     */
    public function setWechatApplet(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatApplet $wechatApplet): self
    {
        $this->wechatApplet = $wechatApplet;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatGame
     */
    public function getWechatGame(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatGame
    {
        return $this->wechatGame;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatGame $wechatGame
     * @return self
     */
    public function setWechatGame(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatGame $wechatGame): self
    {
        $this->wechatGame = $wechatGame;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->button !== null) {
            $result['button'] = $this->button;
        }
        if ($this->coupon !== null) {
            $result['coupon'] = $this->coupon;
        }
        if ($this->form !== null) {
            $result['form'] = $this->form;
        }
        if ($this->index !== null) {
            $result['index'] = $this->index;
        }
        if ($this->picture !== null) {
            $result['picture'] = $this->picture;
        }
        if ($this->pictureGroup !== null) {
            $result['picture_group'] = $this->pictureGroup;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->video !== null) {
            $result['video'] = $this->video;
        }
        if ($this->wechatApplet !== null) {
            $result['wechat_applet'] = $this->wechatApplet;
        }
        if ($this->wechatGame !== null) {
            $result['wechat_game'] = $this->wechatGame;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['button'] ?? null) !== null && is_array($v)) {
            $obj->button = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButton::fromArray($v);
        }
        if (($v = $data['coupon'] ?? null) !== null && is_array($v)) {
            $obj->coupon = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerCoupon::fromArray($v);
        }
        if (($v = $data['form'] ?? null) !== null && is_array($v)) {
            $obj->form = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerForm::fromArray($v);
        }
        if (($v = $data['index'] ?? null) !== null) {
            $obj->index = (string) $v;
        }
        if (($v = $data['picture'] ?? null) !== null && is_array($v)) {
            $obj->picture = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPicture::fromArray($v);
        }
        if (($v = $data['picture_group'] ?? null) !== null && is_array($v)) {
            $obj->pictureGroup = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerPictureGroup::fromArray($v);
        }
        if (($v = $data['text'] ?? null) !== null && is_array($v)) {
            $obj->text = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerText::fromArray($v);
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['video'] ?? null) !== null && is_array($v)) {
            $obj->video = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerVideo::fromArray($v);
        }
        if (($v = $data['wechat_applet'] ?? null) !== null && is_array($v)) {
            $obj->wechatApplet = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatApplet::fromArray($v);
        }
        if (($v = $data['wechat_game'] ?? null) !== null && is_array($v)) {
            $obj->wechatGame = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerWechatGame::fromArray($v);
        }
        return $obj;
    }
}
