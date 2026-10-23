<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 组件列表
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInner[]
     */
    protected ?array $bricks = null;

    /**
     * 站点名称，范围：长度 >= 1
     * @var string
     */
    protected ?string $name = null;

    /**
     * 站点ID，未填充时会创建新的站点。填充时，会对当前站点的落地页进行修改，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * 模板ID，【基于站点创建模板】接口，返回的模板ID
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 组件列表
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInner[]
     */
    public function getBricks(): ?array
    {
        return $this->bricks;
    }

    /**
     * 组件列表
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInner[] $bricks
     * @return self
     */
    public function setBricks(?array $bricks): self
    {
        $this->bricks = $bricks;
        return $this;
    }

    /**
     * 站点名称，范围：长度 >= 1
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 站点名称，范围：长度 >= 1
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 站点ID，未填充时会创建新的站点。填充时，会对当前站点的落地页进行修改，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * 站点ID，未填充时会创建新的站点。填充时，会对当前站点的落地页进行修改，可通过[【橙子建站】（https://www.chengzijianzhan.com/）]平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * 模板ID，【基于站点创建模板】接口，返回的模板ID
     * @return int
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    /**
     * 模板ID，【基于站点创建模板】接口，返回的模板ID
     * @param int $templateId
     * @return self
     */
    public function setTemplateId(?int $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->bricks !== null) {
            $result['bricks'] = $this->bricks;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->templateId !== null) {
            $result['template_id'] = $this->templateId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['bricks'] ?? null) !== null && is_array($v)) {
            $obj->bricks = array_map(fn ($vv) => \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (int) $v;
        }
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        return $obj;
    }
}
