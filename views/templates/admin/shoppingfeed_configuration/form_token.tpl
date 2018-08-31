{*
* NOTICE OF LICENSE
*
* This source file is subject to a commercial license from SARL 202 ecommence
* Use, copy, modification or distribution of this source file without written
* license agreement from the SARL 202 ecommence is strictly forbidden.
* In order to obtain a license, please contact us: tech@202-ecommerce.com
* ...........................................................................
* INFORMATION SUR LA LICENCE D'UTILISATION
*
* L'utilisation de ce fichier source est soumise a une licence commerciale
* concedee par la societe 202 ecommence
* Toute utilisation, reproduction, modification ou distribution du present
* fichier source sans contrat de licence ecrit de la part de la SARL 202 ecommence est
* expressement interdite.
* Pour obtenir une licence, veuillez contacter 202-ecommerce <tech@202-ecommerce.com>
* ...........................................................................
*
* @author    202-ecommerce <tech@202-ecommerce.com>
* @copyright Copyright (c) 202-ecommerce
* @license   Commercial license
*}

{extends file="helpers/form/form.tpl"}

{block name="legend" append}
   <div class="form-group welcome_shoppingfeed">
       <div class="col-lg-6 logo_shoppingfeed">
           <img class="mb-0" id="logo_sf" src="{$img_path|escape:'htmlall':'UTF-8'}logo_shoppingfeed.png"/>
       </div>

       <div class="col-lg-6 desc_shoppingfeed">
           <p>
               {l s='Accélérez la vitesse de synchronisation des stocks Marketplaces de votre module Shopping Feed.
Ce module est complémentaire et indépendant du module « Shopping flux officiel ».
Il permet d’envoyer vos mises à jour de stocks sur les marketplaces soit à chaque mise à jour de stock,
soit si vous utilisez un ERP par lot' mod='shoppingfeed'}
           </p>
       </div>
   </div>
{/block}