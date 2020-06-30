@extends('_layouts.master')

@section('body')

    <section class="home">
        <div class="container">

            <h1 class="title">
                hi, <img class="title__icon" src="/images/icons/ey-up.svg" title="high five">
            </h1>

            <p>
                i'm <span title="awful at nollie flips" class="highlight">matt wyatt,</span>
                and if i could code myself into<br>
                my animal crossing town, i would.
            </p>

            <aside class="divider" aria-hidden="true"></aside>

            <ul class="list">
                <h2 class="list__title">
                    front end dev:
                </h2>

                <li class="list__item">
                    currently helping millions of people <br>
                    find new opportunities at <a href="https://cv-library.co.uk" title="opens their site in new window" class="link" target="_blank">CV Library.</a>
                </li>

                <li class="list__item">
                    keeping it real @ <a href="https://skybase.it" title="opens their site in new window" class="link" target="_blank">Skybase.</a>
                </li>

                <li class="list__item">
                    agency experience @ <a href="https://studiorepublic.com" title="opens their site in new window" class="link" target="_blank">Studio Republic.</a>
                </li>

                <li class="list__item">
                    former <span title="rest in peace we miss you" class="link link--disabled" target="_blank">Sneek Digital</span> annoyance.
                </li>
            </ul>

            <ul class="list">
                <h2 class="list__title">
                    afk:
                </h2>

                <li class="list__item">
                    skateboarding, motorbikes, running..
                </li>

                <li class="list__item">
                    eating my vegetables
                </li>

                <li class="list__item">
                    nintendo switch
                </li>
                <li class="list__item">
                    buying shoes
                </li>
            </ul>

            <aside class="divider divider--thin" aria-hidden="true"></aside>

            <img
                src="/images/one-doombar-please-barkeep.jpg"
                class="selfie"
                alt="Big dork enjoying a doombar"
            >

            <aside class="divider divider--thin u-mobile-only" aria-hidden="true"></aside>

            <ul class="list">
                <h2 class="list__title list__title--small">
                    side projects:
                </h2>

                <li class="list__item">
                    <a href="https://shortenurl.io" title="opens the site in new window" class="link" target="_blank">shorten url</a>; simples
                </li>

                <li class="list__item">
                    <a href="https://app.skybase.it/get-started" title="opens the site in new window" class="link" target="_blank">skybase</a>; project / client comms & management
                </li>

                <li class="list__item u-desktop-only">
                    ngl i mainly made this bit so i keep doing them
                </li>
            </ul>

            <p>
                <span title="or just share animal crossing qr codes" class="highlight">let's chat,</span> send me an <a href="mailto:hello@mattie.world" class="link" target="_blank">email</a>.
            </p>

            <footer class="footer">
                <a href="https://github.com/mattie1da/world" class="link link--code" target="_blank">view the source code</a>

                <div class="socials">
                    <a href="https://twitter.com/mattie1da" title="mostly retweets of memes or animal crossing news. opens in new window" class="link" target="_blank">twitter</a>
                    <a href="https://instagram.com/mattie1da" title="just skate edits not going to lie. opens in new window" class="link" target="_blank">instagram</a>
                    <a href="https://flickr.com/koolbean1996" title="where i post my film photos. opens in new window" class="link" target="_blank">flickr</a>
                    <a href="https://github.com/mattie1da" title="where the <strike>magic</strike> embarrassment happens. opens in new window" class="link" target="_blank">github</a>
                </div>
            </footer>

            {{--blob party--}}
            <svg class="blob blob--top" xmlns="http://www.w3.org/2000/svg" width="500.79" height="369.509" viewBox="0 0 500.79 369.509">
                <g transform="translate(-349.185 -228.221)">
                    <path d="M98.9-143.6c42,16.6,97.6,22.6,127,51,29.5,28.5,33,79.4,23.1,126.4s-33.1,90.1-68.6,111.8-83.3,22-123.3,21.2c-40.1-.8-72.4-2.7-116.3.2-43.8,2.9-99.3,10.6-128.9-11-29.7-21.6-33.6-72.6-43.3-124.2S-256.5-72-238.5-107.8c18.1-35.9,69.6-55.3,115-70.4,45.3-15.2,84.4-26,118.2-17.7S56.9-160.3,98.9-143.6Z" transform="translate(596 427)"/>
                </g>
            </svg>

            <svg class="blob blob--bottom" xmlns="http://www.w3.org/2000/svg" width="500.79" height="369.509" viewBox="0 0 500.79 369.509">
                <g transform="translate(-349.185 -228.221)">
                    <path d="M98.9-143.6c42,16.6,97.6,22.6,127,51,29.5,28.5,33,79.4,23.1,126.4s-33.1,90.1-68.6,111.8-83.3,22-123.3,21.2c-40.1-.8-72.4-2.7-116.3.2-43.8,2.9-99.3,10.6-128.9-11-29.7-21.6-33.6-72.6-43.3-124.2S-256.5-72-238.5-107.8c18.1-35.9,69.6-55.3,115-70.4,45.3-15.2,84.4-26,118.2-17.7S56.9-160.3,98.9-143.6Z" transform="translate(596 427)"/>
                </g>
            </svg>
        </div>

        <aside class="palette">
            <div class="themes">
                <a href="javascript:void(0);" title="change theme colour to purple" data-id="purple" class="theme theme--purple"></a>
                <a href="javascript:void(0);" title="change theme colour to cyan" data-id="cyan" class="theme theme--cyan"></a>
                <a href="javascript:void(0);" title="change theme colour to mint" data-id="mint" class="theme theme--mint"></a>
                <a href="javascript:void(0);" title="change theme colour to fushcia" data-id="fushcia" class="theme theme--fushcia"></a>
                <a href="javascript:void(0);" title="change theme colour to blue" data-id="blue" class="theme theme--blue"></a>
                <a href="javascript:void(0);" title="change theme colour to yellow" data-id="yellow" class="theme theme--yellow"></a>

                <a href="javascript:void(0);" title="change to dark theme" data-id="dark" class="mode mode--dark"></a>
                <a href="javascript:void(0);" title="change back to light theme" data-id="light" class="mode mode--light"></a>
            </div>
        </aside>
    </section>

@endsection
