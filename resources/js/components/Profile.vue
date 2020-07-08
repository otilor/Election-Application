<template>
	<p>I am a profile component	</p>

</template>

<script>
	export default {
		data() {
			return {
				users: [],
				user: {
					name: '',
					email: '',
				},

			}
			
		},

		methods: {
			getAuthenticatedUser: function () {
				fetch('api/user').then(res => res.json()).then(res => {
					this.users = res.data;
				})
			}
		}
	}
</script>