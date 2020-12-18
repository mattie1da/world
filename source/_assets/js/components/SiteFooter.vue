<template>
    <footer class="footer">
        <div class="socials">
            <a v-for="social in socials" :href="`https://${social.url}`" class="link" target="_blank">{{ social.name }}</a>
        </div>
    </footer>
</template>

<script>
export default {
    name: "SiteFooter",

    data() {
        let username = 'mattie1da';

        return {
            socials: [
                {
                    url: 'twitter.com/' + username,
                    name: 'twitter'
                },
                {
                    url: 'instagram.com/' + username,
                    name: 'instagram'
                },
                {
                    url: 'flickr.com/koolbean1996',
                    name: 'flickr'
                },
                {
                    url: 'github.com/' + username,
                    name: 'github'
                },
                {
                    url: 'github.com/' + username + '/world',
                    name: 'sauce code'
                },
            ]
        }
    },
}
</script>