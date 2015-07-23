<?php

function add_query_vars($aVars) {
$aVars[] = "fishid"; // represents the name of the product category as shown in the URL
return $aVars;
}
// hook add_query_vars function into query_vars
add_filter('query_vars', 'add_query_vars');


 
function add_rewrite_rules($aRules) {
$aNewRules = array('fish-finder/&fishid/([^/]+)/?$' => 'index.php?pagename=fish-finder/&fishid=$matches[1]');
$aRules = $aNewRules + $aRules;
return $aRules;
}
// hook add_rewrite_rules function into rewrite_rules_array
add_filter('rewrite_rules_array', 'add_rewrite_rules');
 
function childtheme_create_stylesheet() {
    $templatedir = get_bloginfo('template_directory');
    $stylesheetdir = get_bloginfo('stylesheet_directory');
    ?>
    <!-- <link href="http://www.laseafood.com/laseafood.css" rel="stylesheet" type="text/css" /> -->
    <script type="text/javascript">
        <!--
        function MM_preloadImages() { //v3.0
          var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
            var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
            if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
        }
        //-->
    </script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/SpryEffects.js" type="text/javascript"></script>
    <script type="text/javascript">
    <!--
    function MM_effectSlide(targetElement, duration, from, to, toggle)
    {
        Spry.Effect.DoSlide(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
    }
    function MM_swapImgRestore() { //v3.0
      var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
    }
    function MM_findObj(n, d) { //v4.01
      var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
      if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
      for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
      if(!x && d.getElementById) x=d.getElementById(n); return x;
    }

    function MM_swapImage() { //v3.0
      var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
       if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
    }
    //-->
    </script>
    <style type="text/css">
    
    </style>

    <?php    
}
add_filter('thematic_create_stylesheet', 'childtheme_create_stylesheet');

function la_seafood_header() {
    ?>
    <tr> <!-- first row with header menu (header element)-->
        <td valign="top">
            <script>
                <!--
                function MM_preloadImages() { //v3.0
                  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
                    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
                }
                //-->
                <!--
                function MM_effectSlide(targetElement, duration, from, to, toggle)
                {
	                Spry.Effect.DoSlide(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
                }
                function MM_swapImgRestore() { //v3.0
                  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
                }
                function MM_findObj(n, d) { //v4.01
                  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
                    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
                  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
                  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
                  if(!x && d.getElementById) x=d.getElementById(n); return x;
                }

                function MM_swapImage() { //v3.0
                  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
                   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
                }
                //-->
            </script>
             <table width="900" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td rowspan="3" valign="top"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_03.jpg" width="179" height="88" border="0"/></a></td>
                    <td valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_04.jpg" width="721" height="45" /></td>
                </tr>
                <tr>
                    <td valign="top"><a href="<?php echo home_url(); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_07_1.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_07_1.jpg" name="Image11" width="38" height="34" border="0"></a><a href="<?php echo get_page_link(96); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_08_1.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_08_1.jpg" name="Image1" width="141" height="34" border="0" id="Image1" /></a><a href="<?php echo get_page_link(98); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image21','','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_09_1.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_09_1.jpg" name="Image21" width="134" height="34" border="0" id="Image21" /></a><a href="<?php echo get_page_link(115); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image31','','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_10.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_10.jpg" name="Image31" width="94" height="34" border="0" id="Image31" /></a><a href="<?php echo get_page_link(38); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image41','','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_11.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_11.jpg" name="Image41" width="101" height="34" border="0" id="Image41" /></a><a href="<?php echo get_page_link(144); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image111','','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_12.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_12.jpg" name="Image111" width="110" height="34" border="0" id="Image111" /></a><a href="<?php echo get_page_link(6); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image121','','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_13.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_13.jpg" name="Image121" width="71" height="34" border="0" id="Image121" /></a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_14.jpg" width="32" height="34" />
                    </td>
                </tr>
                <tr>
                    <td valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav_15.jpg" width="721" height="9" /></td>
                </tr>
            </table>
            <map name="MapMapMap" id="MapMapMap">
                <area shape="rect" coords="20,1,161,87" href="<?php echo get_page_link(6); ?>" />
            </map>                
        </td>
    </tr> <!-- END first row with header menu (header element)-->
    <?php    

}

function la_seafood_footer() {
    ?>
    <tr> <!-- begin last row with footer -->
        <td valign="top">
            <table width="900" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td colspan="4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_21.jpg" width="900" height="44" /></td>
                </tr>
                <tr>
                    <td width="15"><a name="bottom"></a></td>
                    <td width="130"><a href="#bottom" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image131','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_23.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_23.jpg" name="Image131" width="128" height="36" border="0" id="Image131" onClick="MM_effectSlide('apDiv1', 600, '0%', '100%', true)" /></a></td>
                    <td width="650" valign="top">&nbsp;</td>
                    <td width="105">
                        <!-- MJC removing INN logo <a href="http://www.peoplewhothink.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_51.jpg" width="111" height="36" border="0" /></a> -->
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td colspan="2">
                        <div id="apDiv1">
                            <table width="100" border="0" cellspacing="0" cellpadding="0">
                                <tr>
              <td><a href="<?php echo get_page_link(96); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_49.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_49.jpg" name="Image12" width="128" height="27" border="0"></a></td>
              <td><a href="<?php echo get_page_link(98); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_50.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_50.jpg" name="Image11" width="118" height="27" border="0"></a></td>
              <td><a href="<?php echo get_page_link(115); ?>"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image34','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_25.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_25.jpg" name="Image34" width="85" height="27" border="0" id="Image34" /></a></td>
              <td><a href="<?php echo get_page_link(38); ?>" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image35','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_26.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_26.jpg" name="Image35" width="92" height="27" border="0" id="Image35" /></a></td>
              <td><a href="<?php echo get_page_link(144); ?>"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image13','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_53.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_53.jpg" name="Image13" width="99" height="27" border="0"></a></td>
              <td><a href="<?php echo get_page_link(111); ?>"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image37','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_28.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_28.jpg" name="Image37" width="101" height="27" border="0" id="Image37" /></a></td>
              <td><a href="<?php echo get_page_link(85); ?>"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image38','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_29.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_29.jpg" name="Image38" width="64" height="27" border="0" id="Image38" /></a></td>
              <td><a href="<?php echo get_page_link(6); ?>"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image39','','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_30.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_30.jpg" alt="" name="Image39" width="67" height="27" border="0" id="Image39" /></a></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </td>
    </tr> <!-- END last row with footer -->
    <?php    

}

function la_seafood_leftsidebar()
{
    ?>
    
                                    <td width="190" valign="top"> <!-- left side bar element -->
                                      <table width="190" border="0" cellspacing="0" cellpadding="0"> 
                                          <tr>
                                              <td height="103">&nbsp;</td>
                                          </tr>
                                          <tr>
                                              <?php la_seafood_on_the_sonar_nav() ;?>
                                          </tr>
                                          <tr>
                                              <td><div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" /></div></td>
                                          </tr>
                                          <tr>
                                              <?php la_seafood_fish_finder_nav("small") ;?>
                                          </tr>
                                          <tr>
                                              <td><div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" alt="" width="39" height="10" /></div></td>
                                          </tr>
                                          <tr>
                                              <?php la_seafood_buy_la_seafood_nav("small") ;?>
                                          </tr>
                                          <tr>
                                              <td><div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" /></div></td>
                                          </tr>
                                          <tr>
                                          </tr>
                                          <tr>
                                              <td><div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" /></div></td>
                                          </tr>
                                      </table> 
                                  </td> <!-- END left side bar element -->
    <?php    
}

function la_seafood_leftsidebar_special()
{
    ?>
                                <!-- mjc begin left side bar special element -->
                                <td width="190" valign="top">
                                  <table width="190" border="0" cellspacing="0" cellpadding="0"> 
                                    <tr>
                                      <td valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="31" height="102" border="0"/></td>
                                    </tr>
                                    <tr>
                                      <?php la_seafood_catch_of_the_day_nav() ;?>
                                    </tr>
                                    <tr>
                                      <td><div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" /></div></td>
                                    </tr>
                                    <tr>
                                      <?php la_seafood_product_planner_nav() ;?>
                                    </tr>
                                    <tr>
                                      <td><div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" alt="" width="39" height="10" /></div></td>
                                    </tr>
                                    <tr>
                                      <?php la_seafood_delivery_nav() ;?>
                                    </tr>
                                    <tr>
                                      <td><div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" /></div></td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                      <td><div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" /></div></td>
                                    </tr>
                                  </table>
                                </td>
                                <!-- mjc end left side bar special element -->
    <?php    
}

function la_seafood_leftsidebar_fish_finder_page()
{
    ?>
                                <!-- mjc begin left side bar element -->
                                <td width="190" valign="top">
                                  <!-- left side bar element -->
                                  <table width="190" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="103">&nbsp;</td>
                                    </tr>
                                    <tr>

                                      <?php la_seafood_fish_finder_widget() ;?>

                                    </tr>
                                    <tr>
                                      <td>
                                        <div align="center">
                                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" />
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <?php la_seafood_fish_finder_nav("small") ;?>
                                                                        
                                    </tr>
                                    <tr>
                                      <td>
                                        <div align="center">
                                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" alt="" width="39" height="10" />
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <?php la_seafood_buy_la_seafood_nav("small") ;?>
                                                                        
                                    </tr>
                                    <tr>
                                      <td>
                                        <div align="center">
                                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" />
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                                                        
                                    </tr>
                                    <tr>
                                      <td>
                                        <div align="center">
                                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="10" />
                                        </div>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                                <!-- mjc end left side bar element -->

<?php    

}

function la_seafood_rightsidebar()
{
    ?>
                                <td width="143" valign="top"> <!-- right side bar element -->
                                    <?php la_seafood_stay_connected_nav("small") ;?>
     
                                    <div align="center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/divider_sidebar_07.jpg" width="143" height="9" vspace="7" /><br />
                                    </div>
                                    <table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><a href="<?php echo get_page_link(85); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sign_up_sm_10.jpg" width="123" height="70" border="0" align="middle" /></a></td>
                                        </tr>
                                    </table> 
                                    <div align="center">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/divider_sidebar_07.jpg" width="143" height="9" vspace="10" /><br />
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/address_16.png" width="123" height="154" />              
                                    </div>
                                </td> <!-- end right side bar element -->

    <?php    
}

function la_seafood_stay_connected_nav($size)
{
    if ($size=="large")
    {
    ?>
                                    <table width="123" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_26.png" width="119" height="31" /></td>
                                        </tr>
                                        <tr>
                                            <td><a href="<?php echo get_stylesheet_directory_uri(); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image23','','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_28.png',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_28.png" name="Image23" width="119" height="34" border="0" id="Image23" /></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://www.facebook.com/profile.php?id=1851828069&amp;ref=nf" target="_blank" onmouseover="MM_swapImage('Image24','','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_30.png',1)" onmouseout="MM_swapImgRestore()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_30.png" name="Image24" width="119" height="32" border="0" id="Image24" /></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://twitter.com/LAseafood" target="_blank" onmouseover="MM_swapImage('Image25','','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_31.png',1)" onmouseout="MM_swapImgRestore()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_31.png" name="Image25" width="119" height="33" border="0" id="Image25" /></a></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>
    <?php    
    }
    else
    {
    ?>
                                    <table width="123" border="0" align="center" cellpadding="0" cellspacing="0"> 
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_26.png" width="119" height="31" /></td>
                                        </tr>
                                        <tr>
                                            <td><a href="<?php echo get_stylesheet_directory_uri(); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image23','','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_28.png',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_28.png" name="Image23" width="119" height="34" border="0" id="Image23" /></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://www.facebook.com/profile.php?id=1851828069&amp;ref=nf" target="_blank" onmouseover="MM_swapImage('Image24','','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_30.png',1)" onmouseout="MM_swapImgRestore()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_30.png" name="Image24" width="119" height="32" border="0" id="Image24" /></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://twitter.com/LAseafood" target="_blank" onmouseover="MM_swapImage('Image25','','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_31.png',1)" onmouseout="MM_swapImgRestore()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_31.png" name="Image25" width="119" height="33" border="0" id="Image25" /></a></td>
                                        </tr>
                                    </table> 
    <?php    
    }
}

function la_seafood_on_the_sonar_links()
{
    ?>

            <a href="<?php echo get_page_link(109); ?>" rel="{urlxfn}" class="link_radar">Great American&#8230;</a><br />
            <a href="<?php echo get_page_link(107); ?>" rel="{urlxfn}" class="link_radar">Louisiana Seafood&#8230;</a><br />
            <a href="<?php echo get_page_link(101); ?>" rel="{urlxfn}" class="link_radar">Now Delivering Seafood&#8230;</a><br />
            <a href="<?php echo get_page_link(103); ?>" rel="{urlxfn}" class="link_radar">Tripletail Recipe...</a><br />
    <?php    
}


function la_seafood_on_the_sonar_nav()
{
    ?>
    
                                                <td> <!-- mjc begin on_the_sonar -->
                                                    <table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/on_the_radar_background_20.jpg" width="152" height="42" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="background_on_the_radar">
                                                                <table width="152" height="102" border="0" cellpadding="0" cellspacing="7">
                                                                    <tr>
                                                                        <td valign="top">  
                                                                                <?php la_seafood_on_the_sonar_links() ;?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/on_the_radar_background_35.jpg" width="152" height="16" /></td>
                                                        </tr>
                                                    </table>
                                                </td> 
                                                <!-- mjc end on_the_sonar -->

     <?php    
}



function la_seafood_on_the_sonar_nav_front_page()
{
  ?>
                                                <!-- mjc begin on_the_sonar fron page -->
                                                <td width="157" valign="top">
                                                    <table width="100" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/on_the_radar_background_20.jpg" width="152" height="42" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="background_on_the_radar">
                                                                <table width="152" height="102" border="0" cellpadding="0" cellspacing="7">
                                                                    <tr>
                                                                        <td valign="top">
                                                                                <?php la_seafood_on_the_sonar_links() ;?>                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/on_the_radar_background_35.jpg" width="152" height="16" /></td>
                                                            </tr>
                                                        </table>
                                                    </td>    
                                                    <!-- mjc begin on_the_sonar fron page -->
  <?php    
}


function la_seafood_fish_finder_nav($size)
{
    if ($size=="large")
    {
    ?>
        <td width="300" valign="top"><a href="<?php echo get_page_link(38); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image17','','<?php echo get_stylesheet_directory_uri(); ?>/images/fish_finder_over_22.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fish_finder_22.jpg" name="Image17" width="300" height="160" border="0" id="Image17" /></a></td>
    <?php    
    }
    else
    {
    ?>
        <td><div align="center"><a href="<?php echo get_page_link(38); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','<?php echo get_stylesheet_directory_uri(); ?>/images/fish_finder_sm_over_08.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fish_finder_sm_08.jpg" name="Image2" width="150" height="85" border="0" id="Image2" /></a></div></td>

    <?php    
    }
}


function la_seafood_buy_la_seafood_nav($size)
{
    if ($size=="large")
    {
    ?>
        <td width="190" valign="top"><a href="<?php echo get_page_link(16); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image22','','<?php echo get_stylesheet_directory_uri(); ?>/images/buy_la_seafood_over_24.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy_la_seafood_24.jpg" name="Image22" width="190" height="160" border="0" id="Image22" /></a></td>

    <?php
    }
    else
    {
    ?>
        <td><div align="center"><a href="<?php echo get_page_link(16); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','<?php echo get_stylesheet_directory_uri(); ?>/images/buy_la_sm_over_11.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/buy_la_sm_11.jpg" name="Image3" width="150" height="85" border="0" id="Image3" /></a></div></td>
     <?php    
    }

}

function la_seafood_testimonials_nav()
{
    ?>
        <td><div align="center"><a href="<?php echo get_page_link(111); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonials_sm_13.jpg" width="150" height="102" border="0" /></a></div></td>
     <?php    
}

function la_seafood_catch_of_the_day_nav()
{
    ?>
<!-- mjc start catch of the day nav -->
        <td height="215" valign="top" class="background_special"><table width="161" border="0" cellpadding="0" cellspacing="7">
                  <tr>
                    <td colspan="2" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="31" height="67" border="0"/></td>
                    </tr>
                  <tr>
                    <td width="36" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="41" height="104" border="0"/></td>
                    <td width="104" valign="top" class="special_content">
                      <p>FRESH seafood delivered to your DOOR. <br />
Home Delivery Now Available!&nbsp; <br />
Call (866) 467-3809
</p>
                      </td>
                  </tr>
                </table>
                  </td>
<!-- mjc end catch of the day nav -->
     <?php    
}

function la_seafood_product_planner_nav()
{
    ?>
        <td><div align="center"><a href="<?php echo get_stylesheet_directory_uri(); ?>/documents/product_list.pdf" target="_blank" onmouseover="MM_swapImage('Image20','','<?php echo get_stylesheet_directory_uri(); ?>/images/wholesale_side_image_over_30.jpg',1)" onmouseout="MM_swapImgRestore()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wholesale_side_image_30.jpg" name="Image20" width="150" height="85" border="0" id="Image20" /></a></div></td>
     <?php    
}


function la_seafood_delivery_nav()
{
    ?>
        <td><div align="center"><a href="<?php echo get_page_link(113); ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image21','','<?php echo get_stylesheet_directory_uri(); ?>/images/wholesale_side_image_over_32.jpg',1)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wholesale_side_image_32.jpg" name="Image21" width="150" height="85" border="0" id="Image21" /></a></div></td>
     <?php    
}

function la_seafood_fish_finder_widget()
{
  ?>

      <!--  mjc begin fish finder widget -->
      <td>
        <table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side_nav_fish_finder_03.jpg" width="150" height="29" />
            </td>
          </tr>
          <tr>
            <td class="background_fish_finder">
              <table width="152" height="102" border="0" cellpadding="0" cellspacing="7">
                <tr>
                  <td valign="top">
                    <br />
                    <div id="CollapsiblePanel1" class="CollapsiblePanel">
                      <div class="CollapsiblePanelTab" tabindex="0">
                        <a href="javascript:;" target="_top">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/title_fin_fish_07.png" alt="fin_fish" name="titlefinfish07" width="113" height="14" border="0" />
                        </a>
                      </div>
                      <div class="CollapsiblePanelContent">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
						<a href="http://www.laseafood.com/amberjack/" target="fish_finder" rel="{urlxfn}" >Amberjack</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
						<a href="http://www.laseafood.com/barjack/" target="fish_finder">Barjack</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/black-drum/" target="fish_finder">Black Drum</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/catfish/" target="fish_finder">Catfish</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/cobia/" target="fish_finder">Cobia</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/croaker/" target="fish_finder">Croaker</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/escolar/" target="fish_finder">Escolar</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/flounder/" target="fish_finder">Flounder</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/garfish/" target="fish_finder">Garfish</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/grouper/" target="fish_finder">Grouper</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/hake/" target="fish_finder">Hake</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/halibut/" target="fish_finder">Halibut</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/mahi-mahi/" target="fish_finder">Mahi Mahi</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/pompano/" target="fish_finder">Pompano</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/rainbow-trout/" target="fish_finder">Rainbow Trout</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/red-drum/" target="fish_finder">Redfish</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/salmon/" target="fish_finder">Salmon</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/shark/" target="fish_finder">Shark</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/sheepshead/" target="fish_finder">Sheepshead</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/snapper/" target="fish_finder">Snapper</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/speckled-trout/" target="fish_finder">Speckled Trout</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/swordfish/" target="fish_finder">Swordfish</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/tilapia/" target="fish_finder">Tilapia</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/triggerfish/" target="fish_finder">Triggerfish</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/tuna/" target="fish_finder">Tuna</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/wahoo/" target="fish_finder">Wahoo</a>
                        <br />
                      </div>
                    </div>
                    <div id="CollapsiblePanel2" class="CollapsiblePanel">
                      <div class="CollapsiblePanelTab" tabindex="0">
                        <a href="javascript:;" target="_top">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/title_shell_fish_07.png" alt="fin_fish" name="titlefinfish07" width="113" height="14" border="0" id="titlefinfish07" />
                        </a>
                      </div>
                      <div class="CollapsiblePanelContent">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/louisiana-crab/" target="fish_finder">Louisiana Crab</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/louisiana-crawfish/" target="fish_finder">Louisiana Crawfish</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/louisiana-oysters/" target="fish_finder">Louisiana Oysters</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/scallops/" target="fish_finder">Scallops</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/softshell-crab/" target="fish_finder">Softshell Crab</a>
                        <br />
                      </div>
                    </div>
                    <div id="CollapsiblePanel3" class="CollapsiblePanel">
                      <div class="CollapsiblePanelTab" tabindex="0">
                        <a href="javascript:;" target="_top">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/title_shrimp_07.png" alt="fin_fish" name="titlefinfish07" width="113" height="14" border="0" id="titlefinfish" />
                        </a>
                      </div>
                      <div class="CollapsiblePanelContent">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/head-on/" target="fish_finder">Head On</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/headless/" target="fish_finder">Headless</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/peeled/" target="fish_finder">Peeled</a>
                        <br />
                      </div>
                    </div>
                    <div id="CollapsiblePanel4" class="CollapsiblePanel">
                      <div class="CollapsiblePanelTab" tabindex="0">
                        <a href="javascript:;" target="_top">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/title_specialty_07.png" alt="fin_fish" name="titlefinfish07" width="113" height="14" border="0" id="titlefinfish2" />
                        </a>
                      </div>
                      <div class="CollapsiblePanelContent">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/cavair/" target="fish_finder">Cavair</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/clams/" target="fish_finder">Clams</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/lobster/ " target="fish_finder">Lobster</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/louisiana-alligator/" target="fish_finder">Louisiana Alligator</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/mussels/" target="fish_finder">Mussels</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/octopus/" target="fish_finder">Octopus</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/smoked-salmon/" target="fish_finder">Smoked Salmon</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/squid/" target="fish_finder">Squid</a>
                        <br />
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bullet_31.gif" width="3" height="8" />
                        <a href="http://www.laseafood.com/turtle-meat/" target="fish_finder">Turtle Meat</a>
                        <br />
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td>
              <div align="center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/side_nav_fish_finder_10.jpg" width="140" height="26" />
              </div>
            </td>
          </tr>
        </table>
      </td>
      <!--  mjc end fish finder widget -->

<?php



}

function la_seafood_front_page_bottom_gallery_nav()
{
    ?>
                    <!-- mjc begin front page bottom gallery nav -->
                        <td height="182" valign="top" class="background_home_info">
                            <table width="900" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td colspan="9" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="20" height="5" /></td>
                                </tr>
                                <tr>
                                    <td width="25" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="25" height="20" /></td>
                                        <?php  la_seafood_on_the_sonar_nav_front_page() ;?>
                                    <td width="39" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="20" /></td>
                                        <?php la_seafood_fish_finder_nav("large") ;?>
                                    <td width="15" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" alt="" width="15" height="20" /></td>
                                        <?php la_seafood_buy_la_seafood_nav("large") ;?>

                                    <td width="39" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="39" height="20" /></td>

                                    <td width="119" valign="top">
                                        <?php la_seafood_stay_connected_nav("large") ;?>                                    
                                    </td>
                                    <td width="16" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="10" height="20" /></td>
                                </tr>
                                <tr>
                                    <td colspan="9" valign="top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spacer.gif" width="20" height="13" /></td>
                                </tr>
                            </table>
                        </td>
                    <!-- mjc end front page bottom gallery nav -->
    <?php 
}

function la_seafood_collapsible_panel_script()
{
    ?>

    <script type="text/javascript">
      <!--
        var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", { contentIsOpen: false });
        var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", { contentIsOpen: false });
        var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3", { contentIsOpen: false });
        var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4", { contentIsOpen: false });
    //-->
    </script>


    <?php
}

function la_seafood_get_page_top_content($pagename)
{
  
}


function las_harlons_history_top_content()
{
    ?>



    <?php
}

function las_a_better_process_top_content()
{
    

}

function las_wholesale_top_content()
{
    

}

function las_fish_finder_top_content()
{
    

}


function las_on_the_sonar_top_content()
{
    

}


function las_contact_top_content()
{
    

}


function las_delivery_top_content()
{
    

}

function las_testimonials_top_content()
{
    

}


function las_sign_up_top_content()
{
    

}


function las_image_path()
{
    echo get_stylesheet_directory_uri();
}




function las_fish_finder_content($fishtosearch, $latin_name, $other_name, $description)
{
    ?>
    
    <table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="400"></td>
  </tr>
  <tr>
    <td><span class="style1"><p><?php echo $fishtosearch; ?>
</p></span></td>
  </tr>
  <tr>
    <td><div align="left">
      <table width="400" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="83" height="20" valign="middle"><span  class="titles">Latin Name:</span></td>
          <td width="317" height="20" valign="middle"><span class="body_content"></span><?php echo $latin_name; ?></td>
        </tr>
      </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="86" height="20" valign="middle"><span  class="titles">Other Name:</span></td>
           <td width="314" height="20" valign="middle"><span class="body_content1"><?php echo $other_name; ?></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="83" height="20" valign="middle"><span  class="titles">Description:</span></td>
           <td width="317" height="20" valign="middle"><span class="body_content2"><?php echo $description; ?></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="72" height="20" valign="middle"><span  class="titles">Food Info:</span></td>
           <td width="328" height="20" valign="middle"><span class="body_content3"></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="55" height="20" valign="middle"><span  class="titles">Season:</span></td>
           <td width="345" height="20" valign="middle"><span class="body_content4"></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="81" height="20" valign="middle"><span  class="titles">Availability:</span></td>
           <td width="319" height="20" valign="middle"><span class="body_content5"><p>Jan - Dec
</p></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="125" height="20" valign="middle"><span  class="titles">Selections Offered:</span></td>
           <td width="275" height="20" valign="middle"><span class="body_content6"><p>All sizes avaialble
</p></span></td>
         </tr>
       </table>
    </div></td>
  </tr>
</table>

    
    <?php
	
	
add_filter('query_vars', 'parameter_queryvars' );
 function parameter_queryvars( $qvars )
 {
 $qvars[] = 'fishid';
 return $qvars;
 }
 
 
	
    
}







    ?>