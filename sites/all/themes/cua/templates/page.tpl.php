<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
global $user;
foreach($node->field_godkendte_piloter['und'] as $approved_uid){
  if($user->uid == $approved_uid['uid']){
    $remove_id = $approved_uid['uid'];
  }
}
?>
<div id="header">
        <div class="container">
               <div class="logo" style="width:15%"><a href="/"><img src="<?php echo $logo; ?>" alt="" /></a></div>
               <div class="header_right">
                    <div class="menu">
<?php
if (user_is_logged_in()) {
?>
<!--[if lt IE 9]>
<ul class="nav"><li class="first leaf"><a href="/" title="" class="active">HEM</a></li>
<li class="leaf"><a href="/ture" title="">TURER</a></li>
<li class="leaf"><a href="/personer" title="">PERSONER</a></li>
<li class="leaf"><a href="/lokationer" title="">PLATSER</a></li>
<li class="leaf"><a href="/beskeder" title="">MEDDELANDEN</a></li>
<li class="leaf"><a href="/ressourcer" title="">TIPS & TRICKS</a></li>
<li class="last leaf"><a href="/user/<? print $user->uid ?>/edit">MIN PROFIL</a></li>
</ul>
<![endif]-->
<?php
}
?>
                        <div class="nav-1 nav-collapse">
                            <?php print render($page['menu']); ?>
                         </div>

                   </div><!--close menu-->
                   <?php print render($page['login']); ?>



               </div><!--close header_right-->
          </div><!--close container-->
     </div><!--close header-->
<?php print render($page['banner']); ?>

     <div id="content">
        <div class="container">
        <?php if ($messages): ?>
    <div class="drupalMessages">
    <?php print $messages; ?>
    <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    </div>
<?php endif; ?>
<?php print render($page['content']); ?>
     </div><!--close container-->
     </div><!--close content-->
<div id="browsernotify_overlay" style="display:none">
<div class='browsernotify'>
  <p id='browsernotifyclose'>[ X ]</p><div style="clear:both"></div>
  <p>
  Please consider using a more recent major browser for smooth user experience.
  Some of the featuers of the website may not function in older browsers.
  Click on a link below to download a latest browser of your choice.
  </p>
  <a href="http://www.google.com/chrome/">Chrome</a>
  <a href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a>
  <a href="http://www.apple.com/safari/">Safari</a>
  <a href="http://www.opera.com/">Opera</a>
  <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">Internet Explorer</a>
  <p></p>
</div>
</div>
<?php
if($user->uid == 0){ ?>
<script type="text/javascript">
document.onreadystatechange = function() {
    if (document.readyState === 'complete') {
        old_browser();
        document.getElementById('browsernotifyclose').addEventListener('click',function(e){
          document.getElementById('browsernotify_overlay').style.display = 'none';
        });
    }
};

function old_browser(){

  if( navigator.userAgent.toLowerCase().indexOf('trident/5.0') != -1 ) {
    document.getElementById('browsernotify_overlay').style.display = 'block';
  }
  else if( navigator.userAgent.toLowerCase().indexOf('msie') != -1 ) {
    document.getElementById('browsernotify_overlay').style.display = 'block';
  }
  else {
    document.getElementById('browsernotify_overlay').style.display = 'none';
  }
}

</script>

<?php } ?>
<?php
if (isset($remove_id) && ($remove_id!='')) {
?>
<script type="text/javascript">
  $(".untag_user").show();
</script>
<?
}
?>

