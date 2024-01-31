<?php

namespace Proxies\__CG__\App\Entity\Product;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProductVariant extends \App\Entity\Product\ProductVariant implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'version', 'onHold', 'onHand', 'tracked', 'weight', 'width', 'height', 'depth', 'taxCategory', 'shippingCategory', 'channelPricings', 'shippingRequired', 'images', 'id', 'code', 'product', 'optionValues', 'position', 'createdAt', 'updatedAt', 'enabled', 'translations', 'translationsCache', 'currentLocale', 'currentTranslation', 'fallbackLocale'];
        }

        return ['__isInitialized__', 'version', 'onHold', 'onHand', 'tracked', 'weight', 'width', 'height', 'depth', 'taxCategory', 'shippingCategory', 'channelPricings', 'shippingRequired', 'images', 'id', 'code', 'product', 'optionValues', 'position', 'createdAt', 'updatedAt', 'enabled', 'translations', 'translationsCache', 'currentLocale', 'currentTranslation', 'fallbackLocale'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProductVariant $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion(?int $version): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', [$version]);

        parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function isInStock(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInStock', []);

        return parent::isInStock();
    }

    /**
     * {@inheritDoc}
     */
    public function getOnHold(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnHold', []);

        return parent::getOnHold();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnHold(?int $onHold): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnHold', [$onHold]);

        parent::setOnHold($onHold);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnHand(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnHand', []);

        return parent::getOnHand();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnHand(?int $onHand): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnHand', [$onHand]);

        parent::setOnHand($onHand);
    }

    /**
     * {@inheritDoc}
     */
    public function isTracked(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTracked', []);

        return parent::isTracked();
    }

    /**
     * {@inheritDoc}
     */
    public function setTracked(bool $tracked): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTracked', [$tracked]);

        parent::setTracked($tracked);
    }

    /**
     * {@inheritDoc}
     */
    public function getInventoryName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInventoryName', []);

        return parent::getInventoryName();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingCategory(): ?\Sylius\Component\Shipping\Model\ShippingCategoryInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingCategory', []);

        return parent::getShippingCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingCategory(?\Sylius\Component\Shipping\Model\ShippingCategoryInterface $shippingCategory): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingCategory', [$shippingCategory]);

        parent::setShippingCategory($shippingCategory);
    }

    /**
     * {@inheritDoc}
     */
    public function getWeight(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWeight', []);

        return parent::getWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setWeight(?float $weight): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWeight', [$weight]);

        parent::setWeight($weight);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', []);

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth(?float $width): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', [$width]);

        parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight(?float $height): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepth(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepth', []);

        return parent::getDepth();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepth(?float $depth): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepth', [$depth]);

        parent::setDepth($depth);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingWeight(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingWeight', []);

        return parent::getShippingWeight();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingWidth(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingWidth', []);

        return parent::getShippingWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingHeight(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingHeight', []);

        return parent::getShippingHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingDepth(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingDepth', []);

        return parent::getShippingDepth();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingVolume(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingVolume', []);

        return parent::getShippingVolume();
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxCategory(): ?\Sylius\Component\Taxation\Model\TaxCategoryInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxCategory', []);

        return parent::getTaxCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxCategory(?\Sylius\Component\Taxation\Model\TaxCategoryInterface $category): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxCategory', [$category]);

        parent::setTaxCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelPricings(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelPricings', []);

        return parent::getChannelPricings();
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelPricingForChannel(\Sylius\Component\Core\Model\ChannelInterface $channel): ?\Sylius\Component\Core\Model\ChannelPricingInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelPricingForChannel', [$channel]);

        return parent::getChannelPricingForChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function hasChannelPricingForChannel(\Sylius\Component\Core\Model\ChannelInterface $channel): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasChannelPricingForChannel', [$channel]);

        return parent::hasChannelPricingForChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function hasChannelPricing(\Sylius\Component\Core\Model\ChannelPricingInterface $channelPricing): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasChannelPricing', [$channelPricing]);

        return parent::hasChannelPricing($channelPricing);
    }

    /**
     * {@inheritDoc}
     */
    public function addChannelPricing(\Sylius\Component\Core\Model\ChannelPricingInterface $channelPricing): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChannelPricing', [$channelPricing]);

        parent::addChannelPricing($channelPricing);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChannelPricing(\Sylius\Component\Core\Model\ChannelPricingInterface $channelPricing): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChannelPricing', [$channelPricing]);

        parent::removeChannelPricing($channelPricing);
    }

    /**
     * {@inheritDoc}
     */
    public function isShippingRequired(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isShippingRequired', []);

        return parent::isShippingRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingRequired(bool $shippingRequired): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingRequired', [$shippingRequired]);

        parent::setShippingRequired($shippingRequired);
    }

    /**
     * {@inheritDoc}
     */
    public function getAppliedPromotionsForChannel(\Sylius\Component\Core\Model\ChannelInterface $channel): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAppliedPromotionsForChannel', [$channel]);

        return parent::getAppliedPromotionsForChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function getImagesByType(string $type): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagesByType', [$type]);

        return parent::getImagesByType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function hasImages(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasImages', []);

        return parent::hasImages();
    }

    /**
     * {@inheritDoc}
     */
    public function hasImage(\Sylius\Component\Core\Model\ProductImageInterface $image): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasImage', [$image]);

        return parent::hasImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\Sylius\Component\Core\Model\ProductImageInterface $image): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\Sylius\Component\Core\Model\ProductImageInterface $image): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function compareTo($other): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'compareTo', [$other]);

        return parent::compareTo($other);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(?string $code): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptor(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptor', []);

        return parent::getDescriptor();
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionValues(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptionValues', []);

        return parent::getOptionValues();
    }

    /**
     * {@inheritDoc}
     */
    public function addOptionValue(\Sylius\Component\Product\Model\ProductOptionValueInterface $optionValue): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOptionValue', [$optionValue]);

        parent::addOptionValue($optionValue);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOptionValue(\Sylius\Component\Product\Model\ProductOptionValueInterface $optionValue): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOptionValue', [$optionValue]);

        parent::removeOptionValue($optionValue);
    }

    /**
     * {@inheritDoc}
     */
    public function hasOptionValue(\Sylius\Component\Product\Model\ProductOptionValueInterface $optionValue): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasOptionValue', [$optionValue]);

        return parent::hasOptionValue($optionValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct(): ?\Sylius\Component\Product\Model\ProductInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', []);

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct(?\Sylius\Component\Product\Model\ProductInterface $product): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', [$product]);

        parent::setProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition(?int $position): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslation(string $locale = NULL): \Sylius\Component\Resource\Model\TranslationInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslation', [$locale]);

        return parent::getTranslation($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled(?bool $enabled): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function enable(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enable', []);

        parent::enable();
    }

    /**
     * {@inheritDoc}
     */
    public function disable(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'disable', []);

        parent::disable();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function hasTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTranslation', [$translation]);

        return parent::hasTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation(\Sylius\Component\Resource\Model\TranslationInterface $translation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translation]);

        parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentLocale(string $currentLocale): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentLocale', [$currentLocale]);

        parent::setCurrentLocale($currentLocale);
    }

    /**
     * {@inheritDoc}
     */
    public function setFallbackLocale(string $fallbackLocale): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFallbackLocale', [$fallbackLocale]);

        parent::setFallbackLocale($fallbackLocale);
    }

}
