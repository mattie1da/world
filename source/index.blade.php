@extends('_layouts.master')

@section('body')

    <section class="home">
        <div class="container">

            <h1 class="title">
                hi, <span class="title__icon">👋🏼</span>
            </h1>

            <p>
                i'm <span title="awful at nollie flips" class="highlight">matt wyatt,</span>
                and if i could code myself into<br>
                my animal crossing town, i would.
            </p>

            <aside class="divider"></aside>

            <ul class="list">
                <h2 class="list__title">
                    front end developer:
                </h2>

                <li class="list__item">
                    currently helping to make the web beautiful<br>
                    and the world <i>less</i> terrible at <a href="https://studiorepublic.com" title="a lovely bunch" class="link" target="_blank">Studio Republic.</a>
                </li>

                <li class="list__item">
                    former <a href="https://sneekdigital.co.uk" title="making the teas" class="link" target="_blank">Sneek Digital</a>
                    bandit, now hustling at <a href="https://skybase.it" title="<3" class="link" target="_blank">Skybase.</a>
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

            <aside class="divider divider--thin"></aside>

            <img
                src="/images/selfie-alert.jpg"
                class="selfie"
                alt="Biggest dork on the globe captured infront of the New York City skyline"
            >

            <p>
                <span class="highlight">let's chat,</span> send me an <a href="mailto:hello@mattie.world" class="link" target="_blank">email.</a>
            </p>

            <footer class="footer">
                <a href="https://github.com/mattie1da/world" class="link link--code" target="_blank">view the source code</a>

                <div class="socials">
                    <a href="https://twitter.com/mattie1da" title="tweets by me that are mostly retweets of memes or animal crossing news" class="link" target="_blank">twitter</a>
                    <a href="https://instagram.com/mattie1da" title="just skate edits not going to lie" class="link" target="_blank">instagram</a>
                    <a href="https://flickr.com/koolbean1996" title="where i post my film photos" class="link" target="_blank">flickr</a>
                    <a href="https://github.com/mattie1da" title="where the <strike>magic</strike> embarrassment happens" class="link" target="_blank">github</a>
                </div>
            </footer>
        </div>

        <aside class="palette">
            <div class="themes">
                <a href="javascript:void(0);" data-id="yellow" class="theme theme--yellow active"></a>
                <a href="javascript:void(0);" data-id="mint" class="theme theme--mint"></a>
                <a href="javascript:void(0);" data-id="purple" class="theme theme--purple"></a>
                <a href="javascript:void(0);" data-id="cyan" class="theme theme--cyan"></a>

                <a href="javascript:void(0);" data-id="dark" class="mode mode--dark"></a>
                <a href="javascript:void(0);" data-id="light" class="mode mode--light active"></a>
            </div>
        </aside>

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
    </section>

@endsection
