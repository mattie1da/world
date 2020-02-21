@extends('_layouts.master')

@section('body')

    <section class="home">
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


        <aside class="selfie"></aside>

        <p>
            <span class="highlight">let's chat,</span> send me an <a href="mailto:" title="or hate mail, hate mail's fine too" class="link" target="_blank">email.</a>
        </p>


        <footer class="footer">
            <a href="https://github.com/mattie1da/world" class="link link--code" target="_blank">view the source code</a>

            <div class="socials">
                <a href="https://twitter.com/mattie1da" class="link" target="_blank">twitter</a>
                <a href="https://instagram.com/mattie1da" class="link" target="_blank">instagram</a>
                <a href="https://github.com/mattie1da" class="link" target="_blank">github</a>
            </div>

        </footer>

    </section>

@endsection
