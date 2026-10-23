<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceElectronicUrlV2ResponseDataUrlListInner implements \JsonSerializable
{
    /**
     * 发票代码
     * @var string
     */
    protected ?string $invoiceCode = null;

    /**
     * 发票号码
     * @var string
     */
    protected ?string $invoiceNo = null;

    /**
     * 发票ofd链接
     * @var string
     */
    protected ?string $ofdUrl = null;

    /**
     * 发票pdf链接
     * @var string
     */
    protected ?string $pdfUrl = null;

    /**
     * 发票xml链接
     * @var string
     */
    protected ?string $xmlUrl = null;

    /**
     * 发票代码
     * @return string
     */
    public function getInvoiceCode(): ?string
    {
        return $this->invoiceCode;
    }

    /**
     * 发票代码
     * @param string $invoiceCode
     * @return self
     */
    public function setInvoiceCode(?string $invoiceCode): self
    {
        $this->invoiceCode = $invoiceCode;
        return $this;
    }

    /**
     * 发票号码
     * @return string
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }

    /**
     * 发票号码
     * @param string $invoiceNo
     * @return self
     */
    public function setInvoiceNo(?string $invoiceNo): self
    {
        $this->invoiceNo = $invoiceNo;
        return $this;
    }

    /**
     * 发票ofd链接
     * @return string
     */
    public function getOfdUrl(): ?string
    {
        return $this->ofdUrl;
    }

    /**
     * 发票ofd链接
     * @param string $ofdUrl
     * @return self
     */
    public function setOfdUrl(?string $ofdUrl): self
    {
        $this->ofdUrl = $ofdUrl;
        return $this;
    }

    /**
     * 发票pdf链接
     * @return string
     */
    public function getPdfUrl(): ?string
    {
        return $this->pdfUrl;
    }

    /**
     * 发票pdf链接
     * @param string $pdfUrl
     * @return self
     */
    public function setPdfUrl(?string $pdfUrl): self
    {
        $this->pdfUrl = $pdfUrl;
        return $this;
    }

    /**
     * 发票xml链接
     * @return string
     */
    public function getXmlUrl(): ?string
    {
        return $this->xmlUrl;
    }

    /**
     * 发票xml链接
     * @param string $xmlUrl
     * @return self
     */
    public function setXmlUrl(?string $xmlUrl): self
    {
        $this->xmlUrl = $xmlUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->invoiceCode !== null) {
            $result['invoice_code'] = $this->invoiceCode;
        }
        if ($this->invoiceNo !== null) {
            $result['invoice_no'] = $this->invoiceNo;
        }
        if ($this->ofdUrl !== null) {
            $result['ofd_url'] = $this->ofdUrl;
        }
        if ($this->pdfUrl !== null) {
            $result['pdf_url'] = $this->pdfUrl;
        }
        if ($this->xmlUrl !== null) {
            $result['xml_url'] = $this->xmlUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invoice_code'] ?? null) !== null) {
            $obj->invoiceCode = (string) $v;
        }
        if (($v = $data['invoice_no'] ?? null) !== null) {
            $obj->invoiceNo = (string) $v;
        }
        if (($v = $data['ofd_url'] ?? null) !== null) {
            $obj->ofdUrl = (string) $v;
        }
        if (($v = $data['pdf_url'] ?? null) !== null) {
            $obj->pdfUrl = (string) $v;
        }
        if (($v = $data['xml_url'] ?? null) !== null) {
            $obj->xmlUrl = (string) $v;
        }
        return $obj;
    }
}
