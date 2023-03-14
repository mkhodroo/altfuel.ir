<script>
import { computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';

export default{
    name: 'Nav'
}


</script>

<template dir="rtl">
    <a :href="route('home')">صفحه نخست</a> |
</template>
