<template>
  <nav class="min-w-[200px]">
    <div class="h-[80px] px-3 flex items-center gap-3">
        <Link href="/" >
         <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800"/>   
        </Link>
        Akshayam Xerox
    </div>
    <div class="px-3">
        <CreateNewDropdown />
        <div class="py-3">
            <NavLink href="/">My Files</NavLink>
            <NavLink href="/" :active="true">Shared with Me</NavLink>
            <NavLink href="/">Shared by me</NavLink>
            <NavLink href="/">Trash</NavLink>
        </div>
    </div>
  </nav>
</template>

<script setup>
import ApplicationLogo from '../ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import CreateNewDropdown from './CreateNewDropdown.vue';
import NavLink from '../NavLink.vue';


</script>