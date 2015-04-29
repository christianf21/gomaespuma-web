<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>

<header>
    <div class="jumbotron header-jumbo" id="header-bg">
        <div class="container-fluid" style="text-align:center;">
                <img id="logo-gomaespuma" src="<?php echo $this->base."/img/logo2.png" ?>" >
                <!--div id="redes">
                    <a href="https://twitter.com/GomaEspumaColor" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large">Seguir a @GomaEspumaColor</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    <div class="fb-like" data-href="https://www.facebook.com/gomaespumaencolores?fref=ts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                </div-->
            </div>
    </div>
    <nav class="navbar navbar-inverse" id="nav-gomaespuma">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="<?php echo (isset($inicio) ? "active" : "") ?>"><?php echo $this->Html->link("inicio",array("controller"=>"home","action"=>"home")); ?></li>
                <!--li class="<?php echo (isset($productos) ? "active" : "") ?>"><?php echo $this->Html->link("productos",array("controller"=>"home","action"=>"work")); ?></li>
                <li class="<?php echo (isset($galeria) ? "active" : "") ?>"><?php echo $this->Html->link("galeria",array("galeria"=>"home","action"=>"contact")); ?></li-->
                <li class="<?php echo (isset($contacto) ? "active" : "") ?>"><?php echo $this->Html->link("contáctanos",array("controller"=>"home","action"=>"contacto")); ?></li>
                <?php if($this->Session->check("usuarioAdmin")): ?>
                    <li class="<?php echo (isset($admin) ? "active" : "") ?>"><?php echo $this->Html->link("admin",array("controller"=>"admin","action"=>"dashboard")); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1503680143232097";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>