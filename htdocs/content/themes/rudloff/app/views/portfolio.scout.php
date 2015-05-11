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
@include('footer')
