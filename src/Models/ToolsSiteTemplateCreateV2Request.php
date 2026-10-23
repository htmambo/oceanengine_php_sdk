<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 站点ID，可通过[【橙子建站】]（https://www.chengzijianzhan.com/）平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @var int
     */
    protected ?int $siteId = null;

    /**
     * 模板名称，可选字段，用户不填写的情况下，会使用原站点名会作为模板名，范围：长度 >= 1
     * @var string
     */
    protected ?string $templateName = null;

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
     * 站点ID，可通过[【橙子建站】]（https://www.chengzijianzhan.com/）平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @return int
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * 站点ID，可通过[【橙子建站】]（https://www.chengzijianzhan.com/）平台或[【获取橙子建站站点列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710620579852#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)获取
     * @param int $siteId
     * @return self
     */
    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * 模板名称，可选字段，用户不填写的情况下，会使用原站点名会作为模板名，范围：长度 >= 1
     * @return string
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }

    /**
     * 模板名称，可选字段，用户不填写的情况下，会使用原站点名会作为模板名，范围：长度 >= 1
     * @param string $templateName
     * @return self
     */
    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;
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
        if ($this->siteId !== null) {
            $result['site_id'] = $this->siteId;
        }
        if ($this->templateName !== null) {
            $result['template_name'] = $this->templateName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['site_id'] ?? null) !== null) {
            $obj->siteId = (int) $v;
        }
        if (($v = $data['template_name'] ?? null) !== null) {
            $obj->templateName = (string) $v;
        }
        return $obj;
    }
}
