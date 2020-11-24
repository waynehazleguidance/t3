<?php

declare(strict_types=1);

namespace Guidance\Tests\Project\Test\Project;

class DemoCest extends \Guidance\Tests\Project\Test\BaseAbstract
{
    // ########################################

    protected function processStateAndPreconditions(): void
    {
        /**
         * ========================================
         *               EXAMPLE USE
         * ========================================
         */

        // ========================================Data registry

        $city1 = $this->dataGenerator->getCity();
        $city2 = $this->dataGenerator->getCity();

        $email         = $this->dataGenerator->getEmail();
        $country       = $this->dataGenerator->getCountry();
        $streetAddress = $this->dataGenerator->getStreetAddress();

        // ========================================Data provider

        $testIndividualData = $this->dataSetProviderIndividual->getData('/city_chic/PDP/id/');
        $testIndividualFile = $this->dataSetProviderIndividual->getFile('guid.png');

        $testGeneralData = $this->dataSetProviderGeneral->getData('/browser/chrome/extension/store/');
        $testGeneralFile = $this->dataSetProviderGeneral->getFile('/browser/chrome/extension/watermark.png');
    }

    // ########################################




    public function T3Micro(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.com/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);

        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Samantha1349');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('/category/hair-dryers');
        $I->see('hair');
        $I->wait(4);

        // Valid Entry
        $I->click(['css' => '.search-icon-wrapper > span:nth-child(1)']);

        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(2);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/product/lucea-id-straightening-and-styling-iron');
        $I->see('T3');


        // Click Add to Cart
        $I->see('Add to Cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('added');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('Cart');

    }


    public function T3MicroAustria(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.at/de/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);

        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('/haartrockner');
        $I->see('haartrockner');
        $I->wait(4);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(3);
        $I->fillField(['id' => 'search'], 'Haartrockner');
        $I->wait(2);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('haartrockner');

        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/product-cura-luxe-dryer');
        $I->see('haartrockner');


        // Click Add to Cart
        $I->see('in den');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('haben');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('warenkorb');

    }


    public function T3MicroBelgium(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.be/en/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(3);
        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(2);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('/hair-dryers');
        $I->see('hair');
        $I->wait(4);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/product-cura-luxe-dryer');
        $I->see('T3');


        // Click Add to Cart
        $I->see('Add to Cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('added');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('Cart');

    }



    public function T3MicroGermany(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.de/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);

        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('de/haartrockner');
        $I->see('haartrockner');
        $I->wait(4);


        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(3);
        $I->fillField(['id' => 'search'], 'Haartrockner');
        $I->wait(2);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('haartrockner');


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('de/product-cura-luxe-dryer');
        $I->see('T3');
        $I->wait(3);

        // Click Add to Cart
        $I->see('in den');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('haben');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('warenkorb');

    }

    public function T3MicroDenmark(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.dk/en/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(2);
        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(2);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('/hair-dryers');
        $I->see('hair');
        $I->wait(4);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/product-cura-luxe-dryer');
        $I->see('T3');


        // Click Add to Cart
        $I->see('add to cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('added');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('Cart');

    }


    public function T3MicroSpain(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.es/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(4);

        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(4);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('en/hair-dryers');
        $I->see('dryer');
        $I->wait(6);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/product-cura-luxe-dryer');
        $I->see('dryer');
        $I->wait(6);

        // Click Add to Cart
        $I->see('Add to Cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('added');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('Cart');

    }

    public function T3MicroFrench(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.fr/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(4);

        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(4);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('/Sèche-cheveux');
        $I->see('cheveux');
        $I->wait(4);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/fr/product-cura-luxe-dryer');
        $I->see('T3');
        $I->wait(5);

        // Click Add to Cart
        $I->see('ajouter');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('avez');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('Panier');

    }


    public function T3MicroItaly(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.it');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(4);

        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(4);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('/it/asciugacapelli');
        $I->see('Asciugacapelli');
        $I->wait(4);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/it/product-cura-luxe-dryer');
        $I->see('Asciugacapelli');
        $I->wait(2);


        // Click Add to Cart
        //$I->see('Add to Cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('aggiunto');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('Carrello');

    }


    public function T3MicroNertherlands(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.nl/en/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(4);

        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(4);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('en/hair-dryers');
        $I->see('hair');
        $I->wait(4);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/en/product-cura-luxe-dryer');
        $I->see('cura');
        $I->wait(2);


        // Click Add to Cart
        //$I->see('Add to Cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('added');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('cart');

    }


    public function T3MicroPoland(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.pl/en/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(4);

        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(4);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('en/hair-dryers');
        $I->see('hair');
        $I->wait(4);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/en/product-cura-luxe-dryer');
        $I->see('cura');
        $I->wait(2);


        // Click Add to Cart
        //$I->see('Add to Cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('added');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('cart');

    }


    public function T3MicroPortugal(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.pt/en/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(4);

        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(4);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('en/hair-dryers');
        $I->see('hair');
        $I->wait(4);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/en/product-cura-luxe-dryer');
        $I->see('cura');
        $I->wait(2);


        // Click Add to Cart
        //$I->see('Add to Cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('added');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('cart');

    }


    public function T3MicroSweden(\Guidance\Tests\Project\Actor $I)
    {

        $I->amOnUrl('https://www.t3micro.pt/en/');
        // $I->see('brows');
        $I->wait(2);
        $I->maximizeWindow();
        $I->wait(7);
        $I->click(['css' => '#btn-cookie-allow > span:nth-child(1)']);
        $I->wait(7);
        $I->click(['css' => 'html body.cms-home.cms-index-index.page-layout-1column.yotpo-yotpo-is-enabled._has-modal div.modals-wrapper aside.modal-popup.newsletter-modal.modal-slide._show div.modal-inner-wrap div#modal-content-1.modal-content div#newsletter-popup div.content-wrap a.no-thanks']);



        // Get rid of coupon
        //$I->click(['xpath' => '/html/body/form/div/div[2]/div[2]/div/div/div/span/strong[1]/span']);
        //$I->click(['.frame-container > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)']);
        $I->wait(5);

        // ************************************************
        // Valid Search
        // *************************************************
        $I->click(['css' => '.icon-search']);
        $I->wait(4);

        $I->fillField(['id' => 'search'], 'Dryer');
        $I->wait(4);
        $I->pressKey(['id' => 'search'],\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->see('dryer');

        // ************************************************
        // LOG IN
        // *************************************************

        $I->amOnPage('customer/account/login');
        $I->wait(5);
        $I->fillField(['id' => 'email'], 'wayne.hazle@guidance.com');
        $I->wait(3);
        $I->fillField(['id' => 'pass'], '@Testing123');
        $I->wait(2);
        $I->click(['id' => 'send2']);
        $I->wait(8);


        // *****************************************************************************
        //  GO TO HAIR DRYERS PLP
        // ***********************************************************
        $I->amOnPage('en/hair-dryers');
        $I->see('hair');
        $I->wait(4);


        // *****************************************************************************
        //  Go to a PDP and Add to Cart
        // ***********************************************************
        $I->amOnPage('/en/product-cura-luxe-dryer');
        $I->see('cura');
        $I->wait(2);


        // Click Add to Cart
        //$I->see('Add to Cart');
        $I->click(['css' => '#product-addtocart-button']);
        $I->waitForText('added');
        $I->wait(5);


        // *****************************************************************************
        //  Go to Shopping Cart
        // ***********************************************************
        $I->amOnPage('/checkout/cart/');
        $I->wait(5);
        $I->see('cart');

    }

    // ########################################
}