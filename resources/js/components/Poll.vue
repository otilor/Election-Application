<template>
	<p>I am a boring, little poll!</p>
</template>

<script>
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
			let poll = "asdfadf";
			this.fetchPoll(poll);
		},

		methods: {
			fetchPoll: function(poll) {
				fetch('/api/polls/' + 'poll').then(res => res.json()).then(res => {
					this.polls = res.data;
				});
				console.log(res.data);			
			}
		}
	}
</script>