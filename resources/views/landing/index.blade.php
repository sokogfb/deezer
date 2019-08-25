@extends('layouts.app')

@section('content')

    <section class="section-intro">
        <div class="u-margin-left-big">
            <h1 class="heading-primary section-intro__title">You bring the passion. <br>We bring the music.</h1>
            <h2 class="heading-secondary">
                <span class="heading-secondary--red">Try Deezer Premium free for 30 days*</span>
            </h2>
            <a href="/premium" class="btn btn__primary--red u-margin-top-medium u-margin-right-small">Deezer Premium</a>
            <a href="/register" class="btn btn__secondary--dark">Deezer Free</a>
        </div>
        
    </section>

    <section class="section-features">
        <h1 class="heading-primary">Why Deezer?</h1>
        <div class="features-wrapper-flex">
            <div class="features-container">
                <div class="feature">
                    <div class="feature__icon">
                        <svg class="svg-icon svg-icon-check" height="48" viewBox="0 0 12 12" width="48"><g><path d="M0.832881674,5.33272695 C0.643058472,5.1431487 0.33466167,5.1432264 0.144400319,5.33324223 C-0.0471874986,5.52458282 -0.0460920282,5.8311039 0.143884374,6.02083515 L3.93388547,9.80594552 L4.27838412,10.1499996 L11.8562966,2.58186587 C12.0506465,2.38776679 12.0476158,2.08271707 11.8573544,1.89270123 C11.6657666,1.70136065 11.3581449,1.70315838 11.1672993,1.89375767 L4.27838412,8.77378322 L0.832881674,5.33272695 Z"></path></g></svg>
                    </div>
                    <div>
                    <h2 class="feature__heading">
                        A world of music in your pocket.
                    </h2>
                    <p class="feature__desc">Find new loves and old favourites from over 56 million tracks.</p>
                    </div>
                </div>
                <div class="feature ">
                    <div class="feature__icon">
                        <svg class="svg-icon svg-icon-check" height="48" viewBox="0 0 12 12" width="48"><g><path d="M0.832881674,5.33272695 C0.643058472,5.1431487 0.33466167,5.1432264 0.144400319,5.33324223 C-0.0471874986,5.52458282 -0.0460920282,5.8311039 0.143884374,6.02083515 L3.93388547,9.80594552 L4.27838412,10.1499996 L11.8562966,2.58186587 C12.0506465,2.38776679 12.0476158,2.08271707 11.8573544,1.89270123 C11.6657666,1.70136065 11.3581449,1.70315838 11.1672993,1.89375767 L4.27838412,8.77378322 L0.832881674,5.33272695 Z"></path></g></svg>
                    </div>
                    <div>
                    <h2 class="feature__heading">
                        No WiFi? No problem.
                    </h2>
                    <p class="feature__desc">With Deezer Premium, you don't need to be connected to enjoy your favoure tracks.</p>
                    </div>
                </div>
                <div class="feature">
                    <div class="feature__icon">
                        <svg class="svg-icon svg-icon-check" height="48" viewBox="0 0 12 12" width="48"><g><path d="M0.832881674,5.33272695 C0.643058472,5.1431487 0.33466167,5.1432264 0.144400319,5.33324223 C-0.0471874986,5.52458282 -0.0460920282,5.8311039 0.143884374,6.02083515 L3.93388547,9.80594552 L4.27838412,10.1499996 L11.8562966,2.58186587 C12.0506465,2.38776679 12.0476158,2.08271707 11.8573544,1.89270123 C11.6657666,1.70136065 11.3581449,1.70315838 11.1672993,1.89375767 L4.27838412,8.77378322 L0.832881674,5.33272695 Z"></path></g></svg>
                    </div>
                    <div>
                    <h2 class="feature__heading">
                        A world of music in your pocket.
                    </h2>
                    <p class="feature__desc">Create playlists from millions of tracks and take them with wherever you go.</p>
                    </div>
                </div>
                <div class="feature">
                    <div class="feature__icon">
                        <svg class="svg-icon svg-icon-check" height="48" viewBox="0 0 12 12" width="48"><g><path d="M0.832881674,5.33272695 C0.643058472,5.1431487 0.33466167,5.1432264 0.144400319,5.33324223 C-0.0471874986,5.52458282 -0.0460920282,5.8311039 0.143884374,6.02083515 L3.93388547,9.80594552 L4.27838412,10.1499996 L11.8562966,2.58186587 C12.0506465,2.38776679 12.0476158,2.08271707 11.8573544,1.89270123 C11.6657666,1.70136065 11.3581449,1.70315838 11.1672993,1.89375767 L4.27838412,8.77378322 L0.832881674,5.33272695 Z"></path></g></svg>
                    </div>
                    <div>
                    <h2 class="feature__heading">
                        Made for you.
                    </h2>
                    <p class="feature__desc">Flow gets to know what you like and what you don't. <br>Discover your personal soundtrack.</p>
                    </div>
                </div>
                
            </div>
            <img src="img/iphone.png" alt="iPhone Pic" srcset="" class="iphone-mockup">
        </div>
        
    </section>

    <section class="mobility">
        <div class="mobility__devices">
            <div class="mobility__devices--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="66px" height="45px" viewBox="0 0 176 120">
                    <title>PC-Mac</title>
                    <path d="M174,93.94H162a2.06,2.06,0,0,0,0,4.12h9.69a7.43,7.43,0,0,1-7,5.88H11.35a7.43,7.43,0,0,1-7-5.88H150a2.11,2.11,0,0,0,.56-.09A8,8,0,0,0,158,90V21.38A9.4,9.4,0,0,0,148.61,12H27.39A9.4,9.4,0,0,0,18,21.38V93.94H2A2.06,2.06,0,0,0-.06,96c0,6.65,5.12,12.06,11.41,12.06h153.3c6.29,0,11.41-5.41,11.41-12.06A2.06,2.06,0,0,0,174,93.94ZM22,21.38A5.4,5.4,0,0,1,27.39,16H148.61A5.4,5.4,0,0,1,154,21.38V90a4,4,0,0,1-3.71,4,2.85,2.85,0,0,0-.29,0H22Z"></path>
                </svg>
            </div>
            <div class="mobility__devices--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 120 120">
                    <title>Mobiles-Tablets</title>
                    <path d="M104.14,44H96a2,2,0,0,0,0,4h8.14A3.86,3.86,0,0,1,108,51.86v60.28a3.86,3.86,0,0,1-3.86,3.86H77.86A3.86,3.86,0,0,1,74,112.14V51.86A3.86,3.86,0,0,1,77.86,48H84a8,8,0,0,0,8-8V7.43A7.43,7.43,0,0,0,84.57,0H15.43A7.43,7.43,0,0,0,8,7.43V112.57A7.43,7.43,0,0,0,15.43,120h88.71a7.87,7.87,0,0,0,7.86-7.86V51.86A7.87,7.87,0,0,0,104.14,44ZM12,112.57V7.43A3.44,3.44,0,0,1,15.43,4H84.57A3.44,3.44,0,0,1,88,7.43V40a4,4,0,0,1-4,4H77.86A7.87,7.87,0,0,0,70,51.86v60.28A7.78,7.78,0,0,0,71,116H15.43A3.44,3.44,0,0,1,12,112.57Z"></path><circle cx="91" cy="108" r="2.5"></circle><circle cx="50" cy="108" r="2.5"></circle><path d="M96,54a2,2,0,0,0-2-2H88a2,2,0,0,0,0,4h6A2,2,0,0,0,96,54Z"></path>
                </svg>
            </div>
            <div class="mobility__devices--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 120 120">
                    <title>Wearables</title>
                    <path d="M81.92,21.45A2,2,0,0,0,80,20V2a2,2,0,0,0-2-2H42a2,2,0,0,0-2,2V20a2,2,0,0,0-1.92,1.45L30.67,47.23a31.87,31.87,0,0,0,0,25.54l7.41,25.78A2,2,0,0,0,40,100v18a2,2,0,0,0,2,2H78a2,2,0,0,0,2-2V100a2,2,0,0,0,1.92-1.45l7.41-25.78a31.88,31.88,0,0,0,0-25.52ZM44,4H76V20H44ZM41.51,24h37l3.74,13-.47-.47A2,2,0,0,0,79,39.47,28,28,0,0,1,85.74,71a1.39,1.39,0,0,0-.12.28,28,28,0,0,1-51.23,0c0-.09-.08-.19-.13-.28a27.95,27.95,0,0,1,0-22c.05-.09.09-.19.13-.28A28,28,0,0,1,73.07,35.23a2,2,0,0,0,1.86-3.54A32,32,0,0,0,37.76,37ZM76,116H44V100H76Zm2.49-20h-37L37.76,83a31.93,31.93,0,0,0,44.48,0Z"></path><path d="M94,53.39a2,2,0,0,0-2,2v9.22a2,2,0,1,0,4,0V55.39A2,2,0,0,0,94,53.39Z"></path></svg>
            </div>
            <div class="mobility__devices--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 120 120">
                    <title>SoundSystems</title>
                    <path d="M89.46,0H30.54A8.55,8.55,0,0,0,22,8.54V111.46A8.55,8.55,0,0,0,30.54,120H89.46A8.55,8.55,0,0,0,98,111.46V8.54A8.55,8.55,0,0,0,89.46,0ZM94,111.46A4.55,4.55,0,0,1,89.46,116H30.54A4.55,4.55,0,0,1,26,111.46V8.54A4.55,4.55,0,0,1,30.54,4H89.46A4.55,4.55,0,0,1,94,8.54Z"></path><path d="M60,42a12.05,12.05,0,0,0,4.82-1,2,2,0,0,0-1.6-3.67,8,8,0,1,1,4.13-4.13A2,2,0,0,0,71,34.8,12,12,0,1,0,60,42Z"></path><path d="M73.84,91.68a2,2,0,0,0,2.77-.54,20,20,0,1,0-5.41,5.43A2,2,0,1,0,69,93.26a16,16,0,1,1,4.33-4.35A2,2,0,0,0,73.84,91.68Z"></path><path d="M60,52a28,28,0,1,0,17,50.23,2,2,0,0,0-2.43-3.18A23.77,23.77,0,0,1,60,104a24,24,0,1,1,19.09-9.46A2,2,0,0,0,82.27,97,27.72,27.72,0,0,0,88,80,28,28,0,0,0,60,52Z"></path></svg>
            </div>
            <div class="mobility__devices--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" viewBox="0 0 120 120">
                    <title>Voice</title>
                    <circle cx="89.87" cy="80" r="2.23"></circle><circle cx="89.87" cy="68.12" r="2.23"></circle><circle cx="89.87" cy="56.23" r="2.23"></circle><circle cx="89.87" cy="44.34" r="2.23"></circle><circle cx="77.92" cy="80" r="2.23"></circle><circle cx="77.92" cy="68.12" r="2.23"></circle><circle cx="77.92" cy="56.23" r="2.23"></circle><circle cx="77.92" cy="44.34" r="2.23"></circle><circle cx="77.92" cy="32.46" r="2.23"></circle><circle cx="77.92" cy="20.57" r="2.23"></circle><circle cx="65.97" cy="80" r="2.23"></circle><circle cx="65.97" cy="68.12" r="2.23"></circle><circle cx="65.97" cy="56.23" r="2.23"></circle><circle cx="65.97" cy="44.34" r="2.23"></circle><circle cx="65.97" cy="32.46" r="2.23"></circle><circle cx="65.97" cy="20.57" r="2.23"></circle><circle cx="54.03" cy="80" r="2.23"></circle><circle cx="54.03" cy="68.12" r="2.23"></circle><circle cx="54.03" cy="56.23" r="2.23"></circle><circle cx="54.03" cy="44.34" r="2.23"></circle><circle cx="54.03" cy="32.46" r="2.23"></circle><circle cx="54.03" cy="20.57" r="2.23"></circle><circle cx="42.08" cy="80" r="2.23"></circle><circle cx="42.08" cy="68.12" r="2.23"></circle><circle cx="42.08" cy="56.23" r="2.23"></circle><circle cx="42.08" cy="44.34" r="2.23"></circle><circle cx="42.08" cy="32.46" r="2.23"></circle><circle cx="42.08" cy="20.57" r="2.23"></circle><circle cx="84.08" cy="74.21" r="2.23"></circle><circle cx="84.08" cy="62.32" r="2.23"></circle><circle cx="84.08" cy="50.43" r="2.23"></circle><circle cx="84.08" cy="38.55" r="2.23"></circle><circle cx="84.08" cy="26.66" r="2.23"></circle><circle cx="72.13" cy="74.21" r="2.23"></circle><circle cx="72.13" cy="62.32" r="2.23"></circle><circle cx="72.13" cy="50.43" r="2.23"></circle><circle cx="72.13" cy="38.55" r="2.23"></circle><circle cx="72.13" cy="26.66" r="2.23"></circle><circle cx="60.18" cy="74.21" r="2.23"></circle><circle cx="60.18" cy="62.32" r="2.23"></circle><circle cx="60.18" cy="50.43" r="2.23"></circle><circle cx="60.18" cy="38.55" r="2.23"></circle><circle cx="60.18" cy="26.66" r="2.23"></circle><circle cx="48.23" cy="74.21" r="2.23"></circle><circle cx="48.23" cy="62.32" r="2.23"></circle><circle cx="48.23" cy="50.43" r="2.23"></circle><circle cx="48.23" cy="38.55" r="2.23"></circle><circle cx="48.23" cy="26.66" r="2.23"></circle><circle cx="36.28" cy="74.21" r="2.23"></circle><circle cx="36.28" cy="62.32" r="2.23"></circle><circle cx="36.28" cy="50.43" r="2.23"></circle><circle cx="36.28" cy="38.55" r="2.23"></circle><circle cx="36.28" cy="26.66" r="2.23"></circle><circle cx="30.13" cy="80" r="2.23"></circle><circle cx="30.13" cy="68.12" r="2.23"></circle><circle cx="30.13" cy="56.23" r="2.23"></circle><circle cx="30.13" cy="44.34" r="2.23"></circle><path d="M91.6,10.91C90,4.89,83.6,0,77.42,0H42.58C36.4,0,30,4.89,28.39,10.94a200.51,200.51,0,0,0,0,98.53c1.64,6,8,10.91,14.18,10.91H77.42a13.52,13.52,0,0,0,5.38-1.18,2,2,0,0,0-1.6-3.67,9.68,9.68,0,0,1-3.78.85H42.58a11.5,11.5,0,0,1-10.31-7.93,196.46,196.46,0,0,1-4.16-75.07A2.23,2.23,0,1,0,28.44,31q.61-4.14,1.41-8.25l.28,0a2.22,2.22,0,0,0,.61-4.36c.47-2.17,1-4.33,1.52-6.48A11.5,11.5,0,0,1,42.58,4H77.42a11.49,11.49,0,0,1,10.31,7.93c.55,2.16,1,4.33,1.53,6.51a2.22,2.22,0,0,0,.61,4.36l.27,0Q91,26.88,91.56,31a2.22,2.22,0,1,0,.33,2.36,196.46,196.46,0,0,1-4.15,75,9.61,9.61,0,0,1-1.48,3,2,2,0,0,0,3.25,2.33,13.56,13.56,0,0,0,2.1-4.35A200.51,200.51,0,0,0,91.6,10.91Z"></path></svg>
            </div>
            <div class="mobility__devices--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="66px" height="45px" viewBox="0 0 176 120">
                    <title>TV-Gaming</title><path d="M174.62,107.25,171.7,93.68a12.46,12.46,0,0,0-5-7.3,2,2,0,1,0-2.33,3.24,8.48,8.48,0,0,1,3.39,4.9l2.92,13.57c.8,3.7-.05,6.83-2.07,7.59a6.22,6.22,0,0,1-6.95-2.19l-4-6.52a2,2,0,0,0-1.71-1H140a2,2,0,0,0-1.7.95l-4,6.52a5.67,5.67,0,0,1-6.54,2.2c-2.17-.82-3.23-4.08-2.48-7.59l2.92-13.57A8.79,8.79,0,0,1,136.29,88H156a8,8,0,0,0,8-8V10.28a2,2,0,0,0-2-2H14a2,2,0,0,0-2,2V98a2,2,0,0,0,2,2H66v4H60a2,2,0,0,0,0,4h56a2,2,0,0,0,0-4h-6v-4h12.89l-1.56,7.25c-1.19,5.51.91,10.63,5,12.17a9.55,9.55,0,0,0,11.35-3.84l3.45-5.57h13.77l3.4,5.56a10,10,0,0,0,8.44,4.44,9.46,9.46,0,0,0,3.33-.59C174,117.92,175.86,113,174.62,107.25ZM106,104H70v-4h36ZM16,96V12.28H160V80a4,4,0,0,1-4,4H136.29a12.85,12.85,0,0,0-12,9.68l-.5,2.32Z"></path></svg>
            </div>
            <div class="mobility__devices--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="66px" height="45px" viewBox="0 0 176 120">
                    <title>Car</title>
                    <path d="M48.54,73a2,2,0,0,0,2.63-1A10,10,0,1,0,42,78a10.17,10.17,0,0,0,4-.84,2,2,0,0,0-1.6-3.67,6,6,0,1,1,3.1-3.1A2,2,0,0,0,48.54,73Z"></path><path d="M140.54,73a2,2,0,0,0,2.63-1A10,10,0,1,0,134,78a10.17,10.17,0,0,0,4-.84,2,2,0,0,0-1.6-3.67,6,6,0,1,1,3.1-3.1A2,2,0,0,0,140.54,73Z"></path><path d="M154.71,49.42c3.32-.24,7-2.89,7.27-6.48,0-.62,0-1.26,0-1.91-.24-3.56-3.95-6.21-7.29-6.46L145.75,34a7.17,7.17,0,0,0-5.2,1.85l-.27.26a87.92,87.92,0,0,0-7.38-17c-2-3.41-6.26-6.2-9.63-6.24C121.9,12.79,110.48,12,88,12s-33.76.78-35.27.89c-3.37,0-7.67,2.83-9.64,6.26a88.06,88.06,0,0,0-7.37,17l-.27-.26A7.19,7.19,0,0,0,30.27,34l-9,.56c-3.32.24-7,2.89-7.27,6.48,0,.62,0,1.26,0,1.91.24,3.56,3.95,6.21,7.29,6.46l6.52.4a18.63,18.63,0,0,0-4.57,6.75,88.11,88.11,0,0,0-5.18,25.16c-.21,4.09-.22,8.7,2.45,11.6a2,2,0,1,0,2.94-2.71C21.93,89,21.89,85.47,22.08,82A84,84,0,0,1,27,58c2.23-6,9.64-10.45,15.15-10.86C57.07,46,72.62,46,87.66,46c15.3,0,31.11,0,46.17,1.09,5.51.4,12.91,4.86,15.14,10.84a84,84,0,0,1,4.95,24c.19,3.55.15,7.06-1.42,8.72-.85.89-2.24,1.33-4.23,1.33H138a8,8,0,0,0-8,8v4.13a4,4,0,0,0,4.08,3.87h15.84a4,4,0,0,0,4.08-3.87V94.57a7.4,7.4,0,0,0,1.4-1.15c2.74-2.89,2.74-7.54,2.52-11.68a88,88,0,0,0-5.19-25.18,18.63,18.63,0,0,0-4.55-6.73l6.51-.4ZM150,104H134v-4a4,4,0,0,1,4-4h10.27a13.72,13.72,0,0,0,1.73-.11Zm-7.8-60.25-.18-.86c0-.6,0-1.21,0-1.79a3.34,3.34,0,0,1,1.16-2.21,3.42,3.42,0,0,1,2.13-.88h.17l8.94.56c1.65.12,3.49,1.51,3.56,2.68a11.85,11.85,0,0,1,0,1.46c-.07,1.2-1.9,2.6-3.55,2.72l-9,.56a3.33,3.33,0,0,1-2.27-.87A3.68,3.68,0,0,1,142.2,43.74ZM30.52,46l-8.94-.56c-1.65-.12-3.49-1.51-3.56-2.68a11.85,11.85,0,0,1,0-1.46c.07-1.21,1.91-2.6,3.54-2.72l9-.56h.16a3.42,3.42,0,0,1,2.11.88A3.33,3.33,0,0,1,34,41.06c0,.61,0,1.23,0,1.82l-.18.84a3.47,3.47,0,0,1-1,1.39,3.28,3.28,0,0,1-2.27.88Zm57.14-4c-15.12,0-30.74,0-45.78,1.1a18.93,18.93,0,0,0-4,.78c0-.12,0-.24,0-.36a79.39,79.39,0,0,1,8.64-22.4c1.37-2.38,4.48-4.23,6.29-4.23H53c1.21-.09,12.5-.88,35-.88s33.79.79,35,.88h.19c1.76,0,4.87,1.85,6.23,4.21a79.35,79.35,0,0,1,8.65,22.42c0,.12,0,.24,0,.36a18.72,18.72,0,0,0-4-.78C118.92,42,103,42,87.66,42Z"></path><path d="M128,92H30a8,8,0,0,0-8,8v4.13A4,4,0,0,0,26.08,108H41.92A4,4,0,0,0,46,104.13V96h82a2,2,0,0,0,0-4ZM42,104H26v-4a4,4,0,0,1,4-4H42Z"></path><path d="M106,76a2,2,0,0,0,0-4H70a2,2,0,0,0,0,4Z"></path></svg>
            </div>
        </div>
        <div class="mobility__description">
            <h2 class="mobility__description--heading">
                Always with you
            </h2>
            <p class="mobility__description--text">
                Download your music and take it from your morning run to dinner out with Deezer Premium. Available on all your devices, all the time, even without WiFi or 4G.
            </p>
        </div>
    </section>
    <section class="plans">
        <h1 class="plans__heading-primary">Get your music</h1>

        <p class="plans__heading-secondary">Recommended</p>
        <!-- Zamijeniti ovaj arrow -->
        <p class="plans__arrow">&darr;</p>

        <div class="card-container">
            <div class="card">
                <h1 class="card__heading-primary">Deezer Free</h1>
                <h1 class="card__heading-secondary">0,00€</h1>
                <h2 class="card__heading-secondary">/month</h2>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">56 million tracks</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">Shuffle</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">No ads</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">Get unlimited skips</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">Offline Mode</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">6 profiles</p>
                </div>
                <a href="/register" class="btn btn__primary-grey">Sign up</a>
            </div>

            <div class="card--blue">
                <h1 class="card__heading-primary">Deezer Premium</h1>
                <h1 class="card__heading-secondary">6,99€</h1>
                <h2 class="card__heading-secondary">/month</h2>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">56 million tracks</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">No ads</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">Get unlimited skips</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">Offline Mode</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">6 profiles</p>
                </div>
                <p class="card__desc">30 days free</p>
                <a href="/register" class="btn btn__primary-red">Try Deezer Premium</a>
                <a href="/premium" class="card__link">More info</a>
            </div>
            <div class="card">
                <h1 class="card__heading-primary">Deezer Family</h1>
                <h1 class="card__heading-secondary">10,49€</h1>
                <h2 class="card__heading-secondary">/month</h2>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">56 million tracks</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">No ads</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">Get unlimited skips</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">Offline Mode</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text">6 profiles</p>
                </div>
                
                
                <a href="/register" class="btn btn__primary-orange">Subscribe</a>
                <a href="/premium/family" class="card__link">More info</a>
            </div>
        </div>

        <p class="plans__disclaimer">Deezer Premium, 30 days free: cannot be comined with any other offer. Valid one time only for 30 days. This offer is non-binding. You may cancel your subsription at any time.</p>

        <div class="subplan">
            <h2 class="subplan__heading">Annual Plan</h2>
            <p class="subplan__desc">Get a year of Deezer Premium for 69,90 € instead of 83,88 €</p>
            <a href="/subplan" class="btn btn__secondary-dark">Subscribe</a>
        </div>
        <div class="subplan">
            <h2 class="subplan__heading">Deezer HiFi</h2>
            <p class="subplan__desc">Stream in lossless quality for 13,99 €/month</p>
            <a href="/subplan" class="btn btn__secondary-dark">Learn more</a>
        </div>
    </section>

    <footer class="footer">
        <img src="img/logo-white.png" alt="Deezer logo" class="logo">
        <div class="socials">
            facebook
            instagram
            twitter
            youtube
        </div>
        <ul class="footer__navigation">
            <h2 class="footer__navigation--heading">Deezer</h2>
            <li class="footer__navigation--item"><a href="/plans" class="footer__navigation--link">Plans</a></li>
            <li class="footer__navigation--item"><a href="/features" class="footer__navigation--link">Features</a></li>
            <li class="footer__navigation--item"><a href="/devices" class="footer__navigation--link">Devices</a></li>
            <li class="footer__navigation--item"><a href="/help" class="footer__navigation--link">Help</a></li>
            <li class="footer__navigation--item"><a href="/aboutus" class="footer__navigation--link">About Us</a></li>
            <li class="footer__navigation--item"><a href="/careers" class="footer__navigation--link">Careers</a></li>
        </ul>
        <ul class="footer__navigation">
            <h2 class="footer__navigation--heading">Explore</h2>
            <li class="footer__navigation--item"><a href="/plans" class="footer__navigation--link">All Channels</a></li>
            <li class="footer__navigation--item"><a href="/charts" class="footer__navigation--link">Charts</a></li>
            <li class="footer__navigation--item"><a href="/devices" class="footer__navigation--link">Most popular release</a></li>
            <li class="footer__navigation--item"><a href="/help" class="footer__navigation--link">New Releases</a></li>
        </ul>
        <ul class="footer__navigation">
            <h2 class="footer__navigation--heading">Who are we?</h2>
            <li class="footer__navigation--item"><a href="/creators" class="footer__navigation--link">Labels & artists</a></li>
            <li class="footer__navigation--item"><a href="/developers" class="footer__navigation--link">Developers</a></li>
            <li class="footer__navigation--item"><a href="/press" class="footer__navigation--link">Press</a></li>
        </ul>
        <ul class="footer__navigation">
            <h2 class="footer__navigation--heading">Legal</h2>
            <li class="footer__navigation--item"><a href="/creators" class="footer__navigation--link">Terms and Conditions of Use</a></li>
            <li class="footer__navigation--item"><a href="/developers" class="footer__navigation--link">Personal data and cookies</a></li>
            <li class="footer__navigation--item"><a href="/press" class="footer__navigation--link">Contact: omaririskic.dev@gmail.com</a></li>
            <li class="footer__navigation--item"><a href="/press" class="footer__navigation--link">Legal information</a></li>
            <li class="footer__navigation--item"><a href="/press" class="footer__navigation--link">Privacy settings</a></li>
        </ul>
        

    </footer>




@endsection