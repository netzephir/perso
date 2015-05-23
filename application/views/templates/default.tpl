<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <meta property="og:title" content="{$titre}" />
    <meta property="og:site_name" content="Site web de jonathan" />
    <title>{$titre}</title>
    <link rel="stylesheet" media="screen" href="{assets_url()}css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" media="screen" href="{assets_url()}css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" media="screen" href="{assets_url()}css/vendor/material-fullpalette.min.css" />
    <link rel="stylesheet" media="screen" href="{assets_url()}css/vendor/ripples.min.css" />
    <link rel="stylesheet" media="screen" href="{assets_url()}css/vendor/roboto.min.css" />
    <link rel="stylesheet" media="screen" href="{assets_url()}css/main.css" />
    {foreach from=$css item=nom}
      <link rel="stylesheet" media="screen" href="{assets_url()}css/{$nom}.css" />
    {/foreach}

    <script type="text/javascript" src="{base_url()}cfgen"></script>    
  <body>
    <div class="page-container" role="main"> 
      

      <div class="container-fluid">
        <div class="row">
            <header class="header-mobile visible-xs visible-sm visible-lg">
                
            </header>
          <div class="col-sm-3 col-md-3 col-lg-1 hidden-xs hidden-sm">
              {include file='partials/sideBar.tpl'}
          </div>

          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-10 ">
            <div class="row">
              <div id="main-container" class="col-xs-12 main-content" style="padding-top: 20px;">
                {$content}
              </div>
            </div>
            <div class="row">
              {*include file='Partials/Footer.tpl'*}
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{assets_url()}js/vendor/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="{assets_url()}js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="{assets_url()}js/vendor/material.min.js"></script>
    <script type="text/javascript" src="{assets_url()}js/vendor/ripples.min.js"></script>
    <script type="text/javascript" src="{assets_url()}js/main.js"></script>
    {foreach from=$js item=nom}
      <script type="text/javascript" src="{assets_url()}js/{$nom}.js"></script>
    {/foreach}
  </body>
</html>

