<template>
    <div :class="[ (theme == '' ? 'home' : `home home--${theme}`), `home--${mode}`]">
        <div class="l-gutter l-gutter-top">
            <heading @theme-change="changeTheme" @mode-change="changeMode" :activeTheme="theme" :activeMode="mode"/>
        </div>

        <slider />

        <div class="l-gutter">
            <div class="container">
                <l-article title="a quick introduction ☕️"
                    video="sneek-hero.mp4"
                    caption="getting sneek digitals message across">
                    <p>
                        i design, build & maintain bespoke websites that are
                        <helper word="responsive" description="phone, tablet and desktop ready" />,
                        <helper word="accessible" description="for users visually impaired or using screen readers, etc" />,
                        <helper word="performant" description="quick load times, maintainable, future proof - scalable" />
                        and fun.
                    </p>

                    <p>
                        an academic design background combined with a career in front end web development
                        provides endless possibilities when transforming an idea into a brand or product, no matter how complex <br>
                        - or simple!
                    </p>

                    <p><em>some</em> of my services include:</p>

                    <ul class="list">
                        <li class="list__item">
                            <helper word="brand refresh" description="logos, brand identity, merchandise etc" />
                        </li>
                        <li class="list__item">
                            <helper word="website rebuild" description="exactly how you want it!" />
                        </li>
                        <li class="list__item">
                            <helper word="adjustments" description="additions, fixes, touch ups" />
                        </li>
                    </ul>
                </l-article>

                <l-article title="👨🏼‍💻 work & experience"
                    video="skybase-time-tracking.mp4"
                    caption="skybase: time tracking"
                    captionLink="https://skybase.it"
                    flipArticle="true">
                    <img class="article__code" src="/images/add-log-method.png" alt="Simple javascript method to add a new item to an array">
                    <p>
                        in 4+ years of experience, i've worked with
                        <a href="https://www.cv-library.co.uk/" class="link" target="_blank">CV Library</a>,
                        <a href="https://www.canvas8.com/" class="link" target="_blank">Canvas8</a>,
                        <a href="https://www.skybase.it/" class="link" target="_blank">Skybase</a>,
                        <a href="https://www.studiorepublic.com/" class="link" target="_blank">Studio Republic</a> and
                        Sneek Digital.<br>
                        in doing so, not only have i had too much coffee,
                        i've solved a lot of problems, produced some fantastic work,
                        and met some lovely people along the way. 🥳🥳🥳
                    </p>

                    <p class="u-desktop-only">
                        ⚡️
                        <span class="code">html</span>,
                        <span class="code">css</span> &
                        <span class="code">javascript</span>
                        are my bread and butter.
                    </p>

                    <p class="u-article-code-pr">
                        <span class="code">vue</span> is my preferred javascript framework, when coupled with
                        <span class="code">vue-router</span> and <span class="code">vuex</span> it transforms a stale,
                        under-performing website into a modern work of art that feels unique and behaves like an app on a smartphone.
                    </p>
                </l-article>


                <l-article title="let's work together ✨"
                    video="todooo-today.mp4"
                    caption="todo list"
                    captionLink="https://todooo.today">
                    <p>
                        whether it's a small enquiry, or you've already got an idea, let's get talking!
                        it could be the start of something brilliant. 🧠
                    </p>
                    <testimonial
                        quote="I was constantly impressed by Matt's attention to detail.
                               He has a great eye for design which became super useful when deadlines were tight
                               and he was able to mock up designs and then translate them into clean semantic markup.
                               Above all, Matt is a great guy who I'm now fortunate enough to call a friend."
                        author="Gaz, Sneek Digital"
                    />
                    <div class="socials">
                        <p class="social">🖥: <a href="mailto:hello@mattie.world" class="link">hello@mattie.world</a></p>
                        <p class="social">📱: 07706609824</p>
                    </div>
                </l-article>
                <svg class="blob blob--center" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FF0066" d="M43.4,-42.8C51.8,-35,51,-17.5,48,-3C45,11.5,39.7,23,31.4,34C23,45,11.5,55.5,-4.2,59.7C-19.9,63.9,-39.8,61.8,-55.8,50.8C-71.7,39.8,-83.8,19.9,-76.8,7C-69.8,-5.9,-43.8,-11.9,-27.9,-19.6C-11.9,-27.4,-5.9,-36.9,5.8,-42.7C17.5,-48.5,35,-50.5,43.4,-42.8Z" transform="translate(100 100)" />
                </svg>
                <site-footer />
            </div>
        </div>

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
</template>

<script>
import Heading from "./components/Heading";
import Slider from "./components/Slider";
import SiteFooter from "./components/SiteFooter";
import LArticle from "./components/LArticle";
import Testimonial from "./components/Testimonial";
import Helper from "./components/Helper";

export default {
    name: "App",
    components: {
        Helper,
        Testimonial,
        LArticle,
        SiteFooter,
        Slider,
        Heading,
    },

    data() {
        return {
            // default theme and mode
            // overwritten by mounted function
            theme: 'blue',
            mode: 'light',
        }
    },

    methods: {
        changeTheme(value) {
            this.theme = value;
        },

        changeMode(value) {
            this.mode = value;
        }
    },

    mounted() {
        if (localStorage.getItem('mode') == 'dark') {
            this.mode = 'dark';
        }

        if (localStorage.getItem('theme') !== null) {
            this.theme = localStorage.getItem('theme');
        }
    }
}
</script>