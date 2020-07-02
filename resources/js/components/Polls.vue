<template>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="poll in polls" v-bind:key="poll.id">
                    <div class="card-header">{{ poll.id }}</div>

                    <div class="card-body">
                        {{ poll.session_id }}
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
			fetchArticles() {
				fetch('api/polls').then(res => res.json()).then(res => {
					this.polls = res.data

				})
			}
		}
	}
</script>