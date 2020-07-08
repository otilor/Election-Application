<template>
	<div>
		<h3 class="text-23px pt-5 pb-1 text-mpgray mx-auto random-div-title-description text-center">John Doe</h3>

	<h4 class = "text-center">Your email address:  jone.doe@gmail.com </h4>		
	</div>
	
	
</template>

<script type = "text/javascript">
	export default {
		data() {
			return {
				users: [],
				user: {
					name: '',
					email: ''
				},

			}
			
		},
		created() {
			this.getAuthenticatedUser();
		},

		methods: {
			getAuthenticatedUser: function () {
				fetch('/api/positions').then(res => res.json()).then(res => {
					let users = res.data;
					console.log(res.data);
				});
			}
		}
	}
</script>