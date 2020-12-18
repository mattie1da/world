<template>
    <div class="slider">
        <figure v-for="art in arts" class="slider__item" tabindex="0">
            <img class="slider__image" :src="`/images/${art.src}`" :alt="art.alt">
            <figcaption class="slider__caption">{{ art.caption }}</figcaption>
        </figure>
    </div>
</template>

<script>
export default {
    name: "Slider",

    data() {
        return {
            arts: [
                {
                    src: 'design-polar.png',
                    alt: 'A desktop and mobile homepage mock up for Polar Skate Co',
                    caption: 'website redesign: polar skate co'
                },
                {
                    src: 'design-sneek.jpg',
                    alt: 'Sneek Digital homepage design',
                    caption: 'photography & website build: sneek digital'
                },
                {
                    src: 'design-skybase.jpg',
                    alt: 'Skybase marketing site mock ups',
                    caption: 'marketing site: skybase'
                },
                {
                    src: 'design-cms.png',
                    alt: 'Article preview layouts for Polar Skate Co',
                    caption: 'control & update your content with a CMS'
                },
                {
                    src: 'design-peak.png',
                    alt: 'Homepage mockup for Peak Fitness',
                    caption: 'website design & build: peak fitness'
                },
                {
                    src: 'type-leader.jpg',
                    alt: 'Custom script typography for \'Leader\'',
                    caption: 'custom typography: leader'
                },
            ]
        }
    }
}
</script>