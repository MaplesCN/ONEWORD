<div id="footer"><footer id="colophon" class="site-footer"><?php get_template_part('template-parts/footer/footer','widgets'); ?><div class="site-info"><?php if(has_nav_menu('footer')):?><nav class="footer-navigation" aria-label="<?php esc_attr_e('Footer Menu','twentynineteen');?>"><?php wp_nav_menu(array('theme_location'=>'footer','menu_class'=>'footer-menu',));?></nav><?php endif; ?>
<a href="#top" style="float:right" title="顶部"><i class="fa-solid fa-caret-up"></i></a><li style="float:right"><a href="<?php echo home_url(); ?>" style="float:right" title="首页"><i class="fa-solid fa-igloo"></i></a></li><li style="float:right"><a id='dark-toggler' title="深/浅色"></a></li>
<div style="margin-top:2rem" align="center"><div class="logo" style="height:30px;width:41px;display:inline-block;vertical-align:middle;margin-bottom:.2rem"></div><div style="font-size:.8rem;font-weight:1000;color:#2f5596;user-select:none;display:inline-block;vertical-align:middle;margin-bottom:.2rem">·独白</div><br>
&copy <?php echo date('Y');?><br><?php echo '第',round((strtotime(date("Y-m-d"))-strtotime("2018-02-01"))/3600/24),'天';?></div>
</div></footer></div><?php wp_footer(); ?></body></html>