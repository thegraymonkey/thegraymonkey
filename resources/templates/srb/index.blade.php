@extends('layout')

@section('intro')
	
		@include('common.intro', [
		'intro_title' => 'Uskoro... a možda ni tad!',
		'intro_subtitle' => 'Ne znam da li uopšte ima smisla praviti dvojezičnu verziju sajta. Možda i napravim ako mi bude bilo baš, baš dosadno...',
		'intro_image' => 'srbija.png'  
	])
	
@section('content')

	<div class="blog-post">
        <h1 class="blog-post-title">Ja jesam patriota.</h1>
        <p class="blog-post-meta">26.01.2015  napisao:<strong>Andjelko</strong></p>
            <blockquote>
              <p>Ali isto tako volim engleski jezik, i pošto svi oko mene pricaju srpski odlučio sam da pišem na engleskom zbog usavršavanja</p>
            </blockquote>
            <p>Zašto li se ja vama pravdam , nije mi jasno. A verovatno ni vama. <br>
            Od danas bi ovaj sajt trebalo da bude online i verovatno ću popiti kritike kako nije završen... zašto si stavio zastavicu ako nećeš da ga prevedes... itd...<br>
            Iskreno smara me više ovaj sajt... jednostavan je i glup :D baš kako i treba. Istina je da želim da radim nešto drugo, zanimljivije... samim tim će i ovaj dosadni i prazni lični sajt dobiti sadžaj.<br>  <strong>Živeli!!!</strong></p>
    </div>      
@stop