<template>
    <div class="article" :class="{ 'article--alt' : flipArticle }">
        <figure>
            <video class="video" autoplay loop muted playsinline>
                <source :src="`/videos/${video}`">
            </video>
            <figcaption class="slider__caption">
                <a v-if="captionLink !== undefined" :href="captionLink" class="link" target="_blank">{{ caption }}</a>
                <span v-else>{{ caption }}</span>
            </figcaption>
        </figure>
        <div class="article__content">
            <h2 class="__title">{{ title }}</h2>
            <aside class="divider" aria-hidden="true"></aside>
            <slot></slot>
        </div>
    </div>
</template>

<script>
import Testimonial from "./Testimonial";
export default {
    name: "LArticle",

    components: {Testimonial},

    props: {
        flipArticle: false,
        video: String,
        caption: String,
        captionLink: String,
        title: String
    }
}
</script>
