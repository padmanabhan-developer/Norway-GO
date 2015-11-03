<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php print $head_title; ?></title>
<?php print $head; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php print $styles; ?>
<?php print $scripts; ?>
<script type="text/javascript" src="/sites/all/themes/cua/js/jquery.min.js"></script>
<script type="text/javascript" src="/sites/all/themes/cua/js/cua-go.js"></script>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
<!--navigation-->
</head>
<body class="<?php print $classes; ?> inner_page" <?php print $attributes;?>>

<div id="wrapper">

<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

     <div id="footer">
     <div class="container">
          <div class="footer_readmore">
               <h2>LES MER</h2>
               <a style="font-weight:bold" href="http://www.cyklingudenalder.dk" target="_blank">www.cyklingudenalder.dk</a>
          </div>
          <div class="footer_social">
               <a href="https://twitter.com/search?q=cyklingudenalder" target="_blank" class="icon-button twitter">
                    <i class="icon-twitter"></i>
                    <span></span>
               </a>
               <a href="https://www.facebook.com/cyklingudenalder" target="_blank" class="icon-button facebook">
                    <i class="icon-facebook"></i>
                    <span></span>
               </a>
          </div>
          <div class="footer_support">
               <p>TRANGRAVSVEJ 8</p>
               <p>1436 KØBENHAVN K</p>
               <p><a href="mailto:support@cyklingudenalder.dk">support@cyklingudenalder.dk</a></p>
          </div>
          <div style="clear:both"></div>
     </div>
     </div>
</div><!--close wrapper-->
<!--[if gte IE 9]><!-->
<script type="text/javascript">
     var navigation1 = responsiveNav(".nav-1");
</script>
<!--<![endif]-->
</body>
</html>
