<template>
    <Modal :show="modelValue"> Show Modal </Modal>
</template>

<script setup>
import Modal from '../Modal.vue';



const modelValue = defineProps({
    modelValue: Boolean,
});
</script>
