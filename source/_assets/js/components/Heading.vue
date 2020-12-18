<template>
    <header class="header">
        <h1 class="title">
            hello! i'm <span class="highlight" title="terrible at skateboarding">matt wyatt</span>; <br>
            a web design & developer <br>based in fleet, hampshire.
        </h1>
        <img class="title__icon" src="/images/icons/ey-up.svg" title="high five">

        <aside class="palette">
            <div class="themes">
                <a v-for="theme in themes"
                   @click.prevent="selectTheme(theme)"
                   :title="`change theme colour to ${theme}`"
                   :class="[(`theme theme--${theme}`), { 'active' : activeTheme == theme }, { 'u-desktop-only' : theme == 'cyan' || theme == 'mint' }]">
                </a>

                <a v-for="mode in modes"
                   @click.prevent="selectTheme(mode)"
                   :title="`change to ${mode} mode`"
                   :class="[(`mode mode--${mode}`), { 'active' : activeMode == mode }]">
                </a>
                <aside class="divider" aria-hidden="true"></aside>
            </div>
        </aside>
    </header>
</template>

<script>
export default {
    name: "Heading",

    props: {
        activeTheme: String,
        activeMode: String,
    },

    data() {
        return {
            theme: String,
            mode: String,
            themes: ['fuchsia', 'purple', 'blue', 'cyan', 'mint', 'yellow'],
            modes: ['dark', 'light']
        }
    },

    methods: {
        selectTheme(value) {
            value == 'dark' || value == 'light'
                ? (this.$emit('mode-change', value), this.mode = value, localStorage.setItem('mode', value))
                : (this.$emit('theme-change', value), this.theme = value, localStorage.setItem('theme', value));
        },
    },
}
</script>