<template>
    <Link :href="href" :type="type" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
        <slot></slot>
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3'

    export default defineComponent({
        components: {
            Link,
        },
        props: {
            type: {
                type: String,
                default: 'button',
            },
            href: {
                default: 'href',
            }
        }
    })
</script>
