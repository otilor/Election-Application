<template>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="poll in polls" v-bind:key="poll.id">
                    <div class="card-header">{{ poll.title }}</div>

                    <div class="card-body">
                        <strong></strong><span class="alert alert-info">{{ poll.description }}</span></strong>
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
					session: '',
					position: ''

				}, 
				poll_id: '',
				pagination: {},
				edit: false
			}
		},

		created() {
			this.fetchArticles();
		},

		methods: {
			fetchArticles: function() {
				fetch('api/polls').then(res => res.json()).then(res => {
					this.polls = res.data;
				})
			},		
		}
	}
</script>