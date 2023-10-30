# Mage2 Module Y2B EmailNotification

    ``y2b/module-emailnotification-invoice-shipment-creditmemo``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
- With help you this module Admin can send email for Invoice, Shipping and Creditmemo without Checked checkbox on "Email Copy of Invoice", "Email Copy of Shipment" and "Email Copy of Creditmemo".
- Please check attached screenshot for more information.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Y2B`
 - Enable the module by running `php bin/magento module:enable Y2B_EmailNotification`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require y2b/module-emailnotification`
 - enable the module by running `php bin/magento module:enable Y2B_EmailNotification`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - You can manage module configuration from Admin > Stores > Settings > Configurations:
 - "Send Invoice Email" : This will help you send invoice email without Checked checkbox on "Email Copy of Invoice"
 - "Send Shipment Email" : This will help you send shipment email without Checked checkbox on "Email Copy of Shipment"
 - "Send Creditmemo Email" : This will help you send shipment email without Checked checkbox on "Email Copy of Creditmemo"






