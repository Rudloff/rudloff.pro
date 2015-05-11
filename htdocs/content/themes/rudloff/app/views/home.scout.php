@include('head')
@loop
	    <main class="main">
        <div class="wrapper">
        <div class="content" id="content">
            <div class="entete">
            <div class="cartouche">
                <h2 class="big">{{ Loop::title() }}</h2>
            </div>
            <div class="aside large">
            {{ Loop::excerpt() }}
            </div>
            </div>
                <div class="texte medium">{{ Loop::content() }}</div>
        <div class="clear"></div>
        </div><!--.content-->
        </div><!--.wrapper-->
    
        
    </main><!--.main-->
@endloop
@include('header')
@include('social')
<div class="asides">
	<aside class="last_work">
    <h3 class="last_work_title">Dernières réalisations</h3>
    <ul>
    <BOUCLE_realisations(ARTICLES) {id_rubrique=2} {!par date} {0, 4}>
        <li class="small"><a href="#URL_ARTICLE">[(#LOGO_ARTICLE|image_passe_partout{125,125}|image_recadre{125,125, left, 363636}|inserer_attribut{alt,#TITRE}|image_aplatir{PNG, 252525})]<br/>#NOM_SITE</a></li>
        </BOUCLE_realisations>
        </ul>
    </aside>
	@include('perso')
</div>
@include('footer')
