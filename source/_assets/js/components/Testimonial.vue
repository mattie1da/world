<template>
    <div class="testimonial">
        <aside class="testimonial__quote-marks">&lsquo;&lsquo;</aside>
        <p>{{ quote }}</p>
        <span class="testimonial__author highlight">{{ author }}</span>
    </div>
</template>

<script>
export default {
    name: "Testimonial",

    props: {
        quote: String,
        author: String,
    }
}
</script>