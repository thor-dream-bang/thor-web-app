<template>
    <div>
        content biodata will be here....

        <router-link to="create" class="btn btn-primary">
			Create new user
		</router-link>

        <router-link :to="{ name: 'biodata' }">Back to index</router-link>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
