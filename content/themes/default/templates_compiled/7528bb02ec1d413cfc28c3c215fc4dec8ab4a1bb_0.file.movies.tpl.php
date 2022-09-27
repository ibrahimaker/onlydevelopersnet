<?php
/* Smarty version 4.1.1, created on 2022-09-26 22:52:55
  from '/home/u0725988/public_html/content/themes/default/templates/movies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_63322d47b25913_15695739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7528bb02ec1d413cfc28c3c215fc4dec8ab4a1bb' => 
    array (
      0 => '/home/u0725988/public_html/content/themes/default/templates/movies.tpl',
      1 => 1651232648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_63322d47b25913_15695739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_movie_night_fldd.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="container">
    <h2><?php echo __("Movies");?>
</h2>
    <p class="text-xlg"><?php echo __($_smarty_tpl->tpl_vars['system']->value['system_description_movies']);?>
</p>
    <div class="row mt20">
      <div class="col-sm-9 col-lg-6 mx-sm-auto">
        <form class="js_search-form" data-handle="movies">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder='<?php echo __("Search for movies");?>
'>
            <div class="input-group-append">
              <button type="submit" class="btn btn-danger"><?php echo __("Search");?>
</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container mt20 offcanvas">
  <div class="row">

    <!-- left panel -->
    <div class="col-md-4 col-lg-3 offcanvas-sidebar">
      <!-- genres -->
      <div class="card">
        <div class="card-body with-nav">
          <ul class="side-nav">
            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "search") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies">
                <?php echo __("All");?>

              </a>
            </li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genres']->value, '_genre', true);
$_smarty_tpl->tpl_vars['_genre']->iteration = 0;
$_smarty_tpl->tpl_vars['_genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_genre']->value) {
$_smarty_tpl->tpl_vars['_genre']->do_else = false;
$_smarty_tpl->tpl_vars['_genre']->iteration++;
$_smarty_tpl->tpl_vars['_genre']->last = $_smarty_tpl->tpl_vars['_genre']->iteration === $_smarty_tpl->tpl_vars['_genre']->total;
$__foreach__genre_0_saved = $_smarty_tpl->tpl_vars['_genre'];
?>
              <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "genre" && $_smarty_tpl->tpl_vars['genre']->value['genre_id'] == $_smarty_tpl->tpl_vars['_genre']->value['genre_id']) {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies/genre/<?php echo $_smarty_tpl->tpl_vars['_genre']->value['genre_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_genre']->value['genre_url'];?>
">
                  <?php echo __($_smarty_tpl->tpl_vars['_genre']->value['genre_name']);?>

                </a>
              </li>
            <?php
$_smarty_tpl->tpl_vars['_genre'] = $__foreach__genre_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
      </div>
      <!-- genres -->
    </div>
    <!-- left panel -->

    <!-- right panel -->
    <div class="col-md-8 col-lg-9 offcanvas-mainbar">

      <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php if ($_smarty_tpl->tpl_vars['view']->value == "movie") {?>

        <div class="article-wrapper" style="border-radius: 3px;">

          <div>
            <div class="post-avatar">
              <div class="post-avatar-picture" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['movie']->value['poster'];?>
);">
              </div>
            </div>
            <div class="post-meta">
              <h3 style="margin-top: 0px; margin-bottom: 5px;"><?php echo $_smarty_tpl->tpl_vars['movie']->value['title'];?>
</h3>
              <?php if ($_smarty_tpl->tpl_vars['movie']->value['release_year']) {?>
                <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['movie']->value['release_year'];?>
</span>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['movie']->value['genres_list']) {?>
                <?php if ($_smarty_tpl->tpl_vars['movie']->value['release_year']) {?> ‧ <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movie']->value['genres_list'], '_genre', true);
$_smarty_tpl->tpl_vars['_genre']->iteration = 0;
$_smarty_tpl->tpl_vars['_genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_genre']->value) {
$_smarty_tpl->tpl_vars['_genre']->do_else = false;
$_smarty_tpl->tpl_vars['_genre']->iteration++;
$_smarty_tpl->tpl_vars['_genre']->last = $_smarty_tpl->tpl_vars['_genre']->iteration === $_smarty_tpl->tpl_vars['_genre']->total;
$__foreach__genre_1_saved = $_smarty_tpl->tpl_vars['_genre'];
?>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies/genre/<?php echo $_smarty_tpl->tpl_vars['_genre']->value['genre_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_genre']->value['genre_url'];?>
">
                    <?php echo __($_smarty_tpl->tpl_vars['_genre']->value['genre_name']);?>

                  </a>
                  <?php if (!$_smarty_tpl->tpl_vars['_genre']->last) {?>/<?php }?>
                <?php
$_smarty_tpl->tpl_vars['_genre'] = $__foreach__genre_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['movie']->value['duration']) {?>
                <?php if ($_smarty_tpl->tpl_vars['movie']->value['genres_list']) {?> ‧ <?php }?>
                <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['movie']->value['duration'];?>
 <?php echo __("minutes");?>
</span>
              <?php }?>
            </div>
          </div>

          <div style="margin: 20px -25px;">
            <?php if ($_smarty_tpl->tpl_vars['movie']->value['source_type'] == "youtube") {?>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_youtube_id($_smarty_tpl->tpl_vars['movie']->value['source'],false);?>
" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['movie']->value['source_type'] == "vimeo") {?>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://player.vimeo.com/video/<?php echo get_vimeo_id($_smarty_tpl->tpl_vars['movie']->value['source']);?>
" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['movie']->value['source_type'] == "link") {?>
              <div>
                <video class="js_videojs video-js vjs-fluid vjs-default-skin" id="video-<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
" controls preload="false">
                  <source src="<?php echo $_smarty_tpl->tpl_vars['movie']->value['source'];?>
" type="video/mp4">
                  <source src="<?php echo $_smarty_tpl->tpl_vars['movie']->value['source'];?>
" type="video/webm">
                </video>
              </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['movie']->value['source_type'] == "uploaded") {?>
              <div>
                <video class="js_videojs video-js vjs-fluid vjs-default-skin" id="video-<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
" controls preload="false">
                  <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['source'];?>
" type="video/mp4">
                  <source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['source'];?>
" type="video/webm">
                </video>
              </div>
            <?php }?>
          </div>

          <div class="article-text mb20">
            <?php echo $_smarty_tpl->tpl_vars['movie']->value['description'];?>

          </div>

          <?php ob_start();
echo $_smarty_tpl->tpl_vars['movie']->value['stars'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
            <div>
              <strong><?php echo __("Stars");?>
:</strong>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['movie']->value['stars']), '_star', true);
$_smarty_tpl->tpl_vars['_star']->iteration = 0;
$_smarty_tpl->tpl_vars['_star']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_star']->value) {
$_smarty_tpl->tpl_vars['_star']->do_else = false;
$_smarty_tpl->tpl_vars['_star']->iteration++;
$_smarty_tpl->tpl_vars['_star']->last = $_smarty_tpl->tpl_vars['_star']->iteration === $_smarty_tpl->tpl_vars['_star']->total;
$__foreach__star_2_saved = $_smarty_tpl->tpl_vars['_star'];
?>
                <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['_star']->value;?>
</span><?php if (!$_smarty_tpl->tpl_vars['_star']->last) {?>, <?php }?>
              <?php
$_smarty_tpl->tpl_vars['_star'] = $__foreach__star_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['movie']->value['release_year']) {?>
            <div class="mt10">
              <strong><?php echo __("Release");?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['movie']->value['release_year'];?>

            </div>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['movie']->value['duration']) {?>
            <div class="mt10">
              <strong><?php echo __("Duration");?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['movie']->value['duration'];?>
 <?php echo __("minutes");?>

            </div>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['movie']->value['genres_list']) {?>
            <div class="article-tags mt10">
              <ul>
                <li>
                  <strong><?php echo __("Genres");?>
:</strong>
                </li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movie']->value['genres_list'], '_genre', true);
$_smarty_tpl->tpl_vars['_genre']->iteration = 0;
$_smarty_tpl->tpl_vars['_genre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_genre']->value) {
$_smarty_tpl->tpl_vars['_genre']->do_else = false;
$_smarty_tpl->tpl_vars['_genre']->iteration++;
$_smarty_tpl->tpl_vars['_genre']->last = $_smarty_tpl->tpl_vars['_genre']->iteration === $_smarty_tpl->tpl_vars['_genre']->total;
$__foreach__genre_3_saved = $_smarty_tpl->tpl_vars['_genre'];
?>
                  <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies/genre/<?php echo $_smarty_tpl->tpl_vars['_genre']->value['genre_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_genre']->value['genre_url'];?>
">
                      <?php echo __($_smarty_tpl->tpl_vars['_genre']->value['genre_name']);?>

                    </a>
                  </li>
                <?php
$_smarty_tpl->tpl_vars['_genre'] = $__foreach__genre_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['movie']->value['imdb_url']) {?>
            <div class="mt10">
              <strong><?php echo __("IMDB");?>
:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['movie']->value['imdb_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['movie']->value['imdb_url'];?>
</a>
            </div>
          <?php }?>

          <div class="mt10">
            <strong><?php echo __("Views");?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['movie']->value['views'];?>

          </div>

          <div class="mt10">
            <strong><?php echo __("Share");?>
:</strong>
            <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
              <i class="fab fa-vk"></i>
            </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp d-none d-sm-inline-block" target="_blank">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
              <i class="fab fa-reddit"></i>
            </a>
            <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['movie']->value['movie_url'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>

      <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['view']->value == "search") {?>
          <div class="bs-callout bs-callout-info mt0">
            <!-- results counter -->
            <span class="badge badge-pill badge-lg badge-light"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span> <?php echo __("results were found for the search for");?>
 "<strong class="text-primary"><?php echo htmlentities($_smarty_tpl->tpl_vars['query']->value,ENT_QUOTES,'utf-8');?>
</strong>"
            <!-- results counter -->
          </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['movies']->value) {?>
          <ul class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, '_movie');
$_smarty_tpl->tpl_vars['_movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_movie']->value) {
$_smarty_tpl->tpl_vars['_movie']->do_else = false;
?>
              <li class="col-sm-6 col-md-6 col-lg-4">
                <div class="movie-card">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['_movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_movie']->value['movie_url'];?>
" class="movie-card-top">
                    <div class="movie-picture" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['_movie']->value['poster'];?>
');"></div>
                    <div class="movie-info">
                      <?php if ($_smarty_tpl->tpl_vars['_movie']->value['genres_list'][0]) {?>
                        <div class="meta"><?php echo __($_smarty_tpl->tpl_vars['_movie']->value['genres_list'][0]['genre_name']);?>
</div>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['_movie']->value['genres_list'][1]) {?>
                        <div class="meta"><?php echo __($_smarty_tpl->tpl_vars['_movie']->value['genres_list'][1]['genre_name']);?>
</div>
                      <?php }?>
                      <div class="meta">
                        <span class="btn btn-info"><?php echo __("Watch");?>
</span>
                      </div>
                    </div>
                  </a>
                  <div class="movie-card-bottom">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movie/<?php echo $_smarty_tpl->tpl_vars['_movie']->value['movie_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_movie']->value['movie_url'];?>
" class="movie-title"><?php echo $_smarty_tpl->tpl_vars['_movie']->value['title'];?>
</a>
                    <div class="movie-year"><?php if ($_smarty_tpl->tpl_vars['_movie']->value['release_year']) {
echo $_smarty_tpl->tpl_vars['_movie']->value['release_year'];
} else {
echo __("N/A");
}?></div>
                  </div>
                </div>
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>

          <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

      <?php }?>
    </div>
    <!-- right panel -->

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
