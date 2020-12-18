<template>
    <span class="help" tabindex="0" :aria-labelledby="`${wordID}-helper`">
        {{word}}<span class="help__box" :id="`${word}-helper`">[{{ description }}]</span>
    </span>
</template>

<script>
export default {
    name: "Helper",

    props: {
        word: String,
        description: String,
    },

    computed: {
        wordID() {
            return this.word.replace(/\s+/g, '-');
        }
    }

}
</script>