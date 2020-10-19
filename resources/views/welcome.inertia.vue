<template>
    <div>
    <h1> Welcome to Teams package </h1>
    <p>I got loaded from package folder</p>
    <p>{{ now }} </p>
    </div>
</template>

<script>
import dayjs from 'dayjs';
export default {
    computed: {
  now: function () {
    return dayjs().format('{YYYY} MM-DDTHH:mm:ss SSS [Z] A');
  }
}
 };
</script>