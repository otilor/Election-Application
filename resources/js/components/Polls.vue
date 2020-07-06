<template>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            	<h3 class="text-center">New polls</h3>
                <div class="card" v-for="poll in polls" v-bind:key="poll.id">
                    <div class="card-header text-black text-center">{{ poll.title }}</div>

                    <div class="card-body">
                        <strong><p class="alert alert-info">{{ poll.description }}</p></strong>
                        <a class="btn btn-success" :href="poll.poll_link">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
	export default {
		data() {
			return {
				polls: [],
				poll: {
					id: '',
					title: '',
					description: '',
                    poll_link:'',
					session: '',
					position: ''

				},
				poll_id: '',
				pagination: {},
				edit: false
			}
		},

		created() {
			try {
				this.fetchArticles();	
			} catch (error) {
				console.log(error);
			}
			
		},

		methods: {
			fetchArticles: function() {
				
				fetch('api/polls').then(res => res.json()).then(res => {
					this.polls = res.data;
				
				});
				
				
			},

		}
	}
</script>
