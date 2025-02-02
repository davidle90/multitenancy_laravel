<script setup>
    import { reactive } from 'vue'

    const layout = reactive([
    { x: 0, y: 0, w: 2, h: 2, i: '0' },
    { x: 2, y: 0, w: 2, h: 4, i: '1' }
    ])
</script>

<template>
    asdsd
    <GridLayout
        v-model:layout="layout"
        :col-num="12"
        :row-height="30"
        is-draggable
        is-resizable
        vertical-compact
        use-css-transforms
    >


    <GridItem
      v-for="item in layout"
      :key="item.i"
      :x="item.x"
      :y="item.y"
      :w="item.w"
      :h="item.h"
      :i="item.i"
      @resize="handleResize"
    >
      {{ item.i }}
    </GridItem>

    </GridLayout>
</template>
